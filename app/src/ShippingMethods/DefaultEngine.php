<?php

namespace App\Engine;

use App\ShippingService;
use App\Data\Order;
use App\Data\Buyer;

use Entities\Engine;
use Exception;

/** Stub class for DEMONSTRATION */
class DefaultEngine extends Engine {
	public function ship(Order $order, Buyer $buyer):string {
		return 'TRACK_ID_STUB';
	}
}