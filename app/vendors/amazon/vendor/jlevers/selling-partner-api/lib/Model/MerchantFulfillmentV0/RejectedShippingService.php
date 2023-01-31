<?php
/**
 * RejectedShippingService
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\MerchantFulfillmentV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * RejectedShippingService Class Doc Comment
 *
 * @category Class
 * @description Information about a rejected shipping service
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RejectedShippingService extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RejectedShippingService';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'carrier_name' => 'string',
        'shipping_service_name' => 'string',
        'shipping_service_id' => 'string',
        'rejection_reason_code' => 'string',
        'rejection_reason_message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'carrier_name' => null,
        'shipping_service_name' => null,
        'shipping_service_id' => null,
        'rejection_reason_code' => null,
        'rejection_reason_message' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'carrier_name' => 'CarrierName',
        'shipping_service_name' => 'ShippingServiceName',
        'shipping_service_id' => 'ShippingServiceId',
        'rejection_reason_code' => 'RejectionReasonCode',
        'rejection_reason_message' => 'RejectionReasonMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier_name' => 'setCarrierName',
        'shipping_service_name' => 'setShippingServiceName',
        'shipping_service_id' => 'setShippingServiceId',
        'rejection_reason_code' => 'setRejectionReasonCode',
        'rejection_reason_message' => 'setRejectionReasonMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier_name' => 'getCarrierName',
        'shipping_service_name' => 'getShippingServiceName',
        'shipping_service_id' => 'getShippingServiceId',
        'rejection_reason_code' => 'getRejectionReasonCode',
        'rejection_reason_message' => 'getRejectionReasonMessage'
    ];


    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['shipping_service_name'] = $data['shipping_service_name'] ?? null;
        $this->container['shipping_service_id'] = $data['shipping_service_id'] ?? null;
        $this->container['rejection_reason_code'] = $data['rejection_reason_code'] ?? null;
        $this->container['rejection_reason_message'] = $data['rejection_reason_message'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['carrier_name'] === null) {
            $invalidProperties[] = "'carrier_name' can't be null";
        }
        if ($this->container['shipping_service_name'] === null) {
            $invalidProperties[] = "'shipping_service_name' can't be null";
        }
        if ($this->container['shipping_service_id'] === null) {
            $invalidProperties[] = "'shipping_service_id' can't be null";
        }
        if ($this->container['rejection_reason_code'] === null) {
            $invalidProperties[] = "'rejection_reason_code' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name The rejected shipping carrier name. e.g. USPS
     *
     * @return self
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }
    /**
     * Gets shipping_service_name
     *
     * @return string
     */
    public function getShippingServiceName()
    {
        return $this->container['shipping_service_name'];
    }

    /**
     * Sets shipping_service_name
     *
     * @param string $shipping_service_name The rejected shipping service localized name. e.g. FedEx Standard Overnight
     *
     * @return self
     */
    public function setShippingServiceName($shipping_service_name)
    {
        $this->container['shipping_service_name'] = $shipping_service_name;

        return $this;
    }
    /**
     * Gets shipping_service_id
     *
     * @return string
     */
    public function getShippingServiceId()
    {
        return $this->container['shipping_service_id'];
    }

    /**
     * Sets shipping_service_id
     *
     * @param string $shipping_service_id An Amazon-defined shipping service identifier.
     *
     * @return self
     */
    public function setShippingServiceId($shipping_service_id)
    {
        $this->container['shipping_service_id'] = $shipping_service_id;

        return $this;
    }
    /**
     * Gets rejection_reason_code
     *
     * @return string
     */
    public function getRejectionReasonCode()
    {
        return $this->container['rejection_reason_code'];
    }

    /**
     * Sets rejection_reason_code
     *
     * @param string $rejection_reason_code A reason code meant to be consumed programatically. e.g. CARRIER_CANNOT_SHIP_TO_POBOX
     *
     * @return self
     */
    public function setRejectionReasonCode($rejection_reason_code)
    {
        $this->container['rejection_reason_code'] = $rejection_reason_code;

        return $this;
    }
    /**
     * Gets rejection_reason_message
     *
     * @return string|null
     */
    public function getRejectionReasonMessage()
    {
        return $this->container['rejection_reason_message'];
    }

    /**
     * Sets rejection_reason_message
     *
     * @param string|null $rejection_reason_message A localized human readable description of the rejected reason.
     *
     * @return self
     */
    public function setRejectionReasonMessage($rejection_reason_message)
    {
        $this->container['rejection_reason_message'] = $rejection_reason_message;

        return $this;
    }
}

