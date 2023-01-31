<?php

namespace App;

// NO USE ABSTRACT AS INPUT PARAMS
use App\Data\AbstractOrder;
use App\Data\Buyer;
use App\Data\BuyerInterface;
use App\Data\Order;

use Entities\EngineFactory;

class ShippingService implements ShippingServiceInterface {
	private object $engine;

	public function __construct(string $shippingMethod = 'default'){
		$this->engine = EngineFactory::get($shippingMethod);
	}

	// NO USE ABSTRACT AS INPUT PARAMS
//    /** Function ship implementation for ShippingServiceInterface */
//    public function ship(AbstractOrder $order, BuyerInterface $buyer):string {
//    }

    /** Function ship implementation for ShippingServiceInterface */
	public function ship(Order $order, Buyer $buyer):string {
		return $this->engine->ship($order, $buyer);
    }
}