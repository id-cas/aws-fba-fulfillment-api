<?php

namespace App\Engine;

use App\ShippingService;
use App\Data\Order;
use App\Data\Buyer;

use Entities\Engine;

use SellingPartnerApi\Endpoint;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\Api\FbaOutboundV20200701Api;

use Exception;

/** Amazon shipping functionality */
class AmazonEngine extends Engine {
	private object $api;
	private array $params;

	public function __construct(){

		// TODO: Create Config class with external config.ini file for Configuration custom settings
		$configFilePath = __DIR__. '/amazon.api.conf';
		if(!file_exists($configFilePath)){
			throw new Exception("Exception unable to read config file '{$configFilePath}' for Amazon API ");
		}
		$config = parse_ini_file($configFilePath);

		// If you're not working in the North American marketplace, change
		// this to another endpoint from lib/Endpoint.php
		$this->params = $config;
		$this->params['endpoint'] = Endpoint::NA;

		// Init API	https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FbaOutboundV20200701Api.md#createFulfillmentOrder
		$this->api = new FbaOutboundV20200701Api(new Configuration($this->params));
	}

	public function ship(Order $order, Buyer $buyer):string {
		// Docs https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FbaOutboundV20200701Api.md#createFulfillmentOrder
		// Body data https://github.com/jlevers/selling-partner-api/blob/main/docs/Model/FbaOutboundV20200701/CreateFulfillmentOrderRequest.md
		// \SellingPartnerApi\Model\FbaOutboundV20200701\CreateFulfillmentOrderRequest

		$body = new \SellingPartnerApi\Model\FbaOutboundV20200701\CreateFulfillmentOrderRequest();
		$body->setMarketplaceId($order->data['store_name']);
		$body->setSellerFulfillmentOrderId($order->data['order_unique']);
		$body->setDisplayableOrderId($order->data['order_id']);
		$body->setDisplayableOrderDate($order->data['order_date']);
		$body->setDisplayableOrderComment($order->data['comments']);
		$body->setDeliveryWindow(new \SellingPartnerApi\Model\FbaOutboundV20200701\DeliveryWindow([
			'start_date' => $order->data['order_date'],
			'end_date' => $order->data['due_date']
		]));
		$body->setDestinationAddress(new \SellingPartnerApi\Model\FbaOutboundV20200701\Address([
			'name' => $order->data['buyer_name'],
			'address_line1' => $order->data['shipping_adress'], // spelling error "shipping_adress" must be "shipping_address"
			'address_line2' => '',
			'address_line3' => '',
			'city' => $order->data['shipping_city'],
			'district_or_county' => $order->data['shipping_country'],
			'state_or_region' => $order->data['shipping_state'],
			'postal_code' => $order->data['shipping_zip'],
			'country_code' => $order->data['shipping_country'],
			'phone' => $buyer->data['phone'],
		]));
		$body->setCodSettings(true);
		$body->setNotificationEmails($buyer->data['email']);

		// Order items
		$items = [];
		foreach ($order->data['products'] as $item){
			$items[] = new \SellingPartnerApi\Model\FbaOutboundV20200701\CreateFulfillmentOrderItem([
				'seller_sku' => $item['sku'],
				'seller_fulfillment_order_item_id' => $item['product_code'],
				'quantity' => $item['ammount'],
				'gift_message' => $item['title'],
				'displayable_comment' => $item['comment'],
				'fulfillment_network_sku' => $item['stock_action_code'],
				'per_unit_declared_value' => null,
				'per_unit_price' => new \SellingPartnerApi\Model\FbaOutboundV20200701\Money([
					'currency_code' => $order->data['currency'],
					'value' => $item['buying_price'],
				]),
				'per_unit_tax' => null,
			]);
		}
		$body->setItems($items);

		// API communication
		try {
			$errors = null;

			// Create order fullfillment
			$createFulfillmentOrderResponse = $this->api->createFulfillmentOrder($body);
			$errors = $createFulfillmentOrderResponse->getErrors();
			if(!is_null($errors)){
				throw new Exception('Exception: Amazon API createFulfillmentOrder '. json_encode($errors));
			}

			// Create order fullfillment
			$createFulfillmentOrderResponse = $this->api->createFulfillmentOrder($body);
			$errors = $createFulfillmentOrderResponse->getErrors();
			if(!is_null($errors)){
				throw new Exception('Exception: Amazon API createFulfillmentOrder '. json_encode($errors));
			}

			// Order fullfillment was created, now it's possible to get order info
			// Try to find order by seller's order uniq id
			$getFulfillmentOrderResponse = $this->api->getFulfillmentOrder($order->data['order_unique']);
			$errors = $getFulfillmentOrderResponse->getErrors();
			if(!is_null($errors)){
				throw new Exception('Exception: Amazon API getFulfillmentOrderResponse '. json_encode($errors));
			}

			// Get available tracking numbers of the order
			$trackNumbers = [];
			$fulfillmentShipments = $getFulfillmentOrderResponse->getPayload()->getFulfillmentShipments();
			foreach ($fulfillmentShipments as $fulfillmentShipment){
				$fulfillmentShipmentPackages = $fulfillmentShipment->getFulfillmentShipmentPackage();
				foreach ($fulfillmentShipmentPackages as $fulfillmentShipmentPackage){
					$trackNumbers[] = $fulfillmentShipmentPackage->getTrackingNumber();
				}
			}

			// Return order's tracking numbers as string with separator
			return implode(';', $trackNumbers);

		} catch (Exception $e) {
			throw new Exception('Exception when calling FbaOutboundV20200701Api->createFulfillmentOrder: '. $e->getMessage());
		}




		return 'TRACK_EMPTY';
	}
}