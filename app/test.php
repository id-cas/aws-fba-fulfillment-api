<?php

use App\Bootstrap;
use App\Engine;
use App\Data\Order;
use App\Data\Buyer;
use App\ShippingService;

// Connect SDK source from https://github.com/jlevers/selling-partner-api
// composer require jlevers/selling-partner-api
require_once('vendors/amazon/vendor/autoload.php');

// Handmade classes AUTOLOAD
require_once('bootstrap.php');
Bootstrap::autoload();

try {
	// Load order data
	$order = new Order(16400, 'JsonFile');
	$order->load();
//	// TEST
//	echo var_dump($order->data);

	// Load buyer data
	$buyer = new Buyer(29664, 'JsonFile');
	$buyer->load();
//	// TEST
//	 echo var_dump($buyer->data);
//	 echo var_dump($buyer->offsetGet('country_id'));
//	 echo var_dump($buyer->offsetGet('name'));

	// Get track code
	$amazon = new ShippingService('Amazon');
	// TEST
	echo var_dump($amazon->ship($order, $buyer));

} catch (Exception $e) {
	echo 'Caught exception: ',  $e->getMessage(), "\n";
}


echo "Completed\n";