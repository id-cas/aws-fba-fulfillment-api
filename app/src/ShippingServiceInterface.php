<?php

namespace App;

// NO USE ABSTRACT AS INPUT PARAMS
use App\Data\AbstractOrder;
use App\Data\Buyer;
use App\Data\BuyerInterface;
use App\Data\Order;

interface ShippingServiceInterface
{

	public function __construct(string $method);

    /**
     * Need to implement logic that will send a command to Amazon's fulfillment network (FBA) to fulfill seller order using seller inventory in Amazon's fulfillment network (FBA)
     * and will return the tracking number as string for this order.
     * If operation cannot be performed please throw exception with error message
     * 
     * @throws RuntimeException
     */
	// NO USE ABSTRACT AS INPUT PARAMS
    // public function ship(AbstractOrder $order, BuyerInterface $buyer): string;
	public function ship(Order $order, Buyer $buyer):string;
}
