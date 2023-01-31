<?php
	namespace App;

	define('CURRENT_WORKING_DIR', dirname(__FILE__));

	class Bootstrap {
		 private static array $classes = [
			'EngineInterface' => [
				CURRENT_WORKING_DIR . '/entities/Engine/EngineInterface.php'
			],

			'Engine' => [
				CURRENT_WORKING_DIR . '/entities/Engine/Engine.php'
			],

			'EngineFactoryInterface' => [
				CURRENT_WORKING_DIR . '/entities/Engine/EngineFactoryInterface.php'
			],

			'EngineFactory' => [
				CURRENT_WORKING_DIR . '/entities/Engine/EngineFactory.php'
			],



			 'JsonFileEngine' => [
				 CURRENT_WORKING_DIR . '/src/Connection/Engine/JsonFileEngine.php'
			 ],

			 'MongoDbEngine' => [
				 CURRENT_WORKING_DIR . '/src/Connection/Engine/MongoDbEngine.php'
			 ],

			'AbstractOrder' => [
				CURRENT_WORKING_DIR . '/src/Data/AbstractOrder.php'
			],

			'Order' => [
				CURRENT_WORKING_DIR . '/src/Data/Order.php'
			],

			 'BuyerInterface' => [
				 CURRENT_WORKING_DIR . '/src/Data/BuyerInterface.php'
			 ],

			 'AbstractBuyer' => [
				 CURRENT_WORKING_DIR . '/src/Data/AbstractBuyer.php'
			 ],

			 'Buyer' => [
				 CURRENT_WORKING_DIR . '/src/Data/Buyer.php'
			 ],


			 'ShippingServiceInterface' => [
				 CURRENT_WORKING_DIR . '/src/ShippingServiceInterface.php'
			 ],

			 'ShippingService' => [
				 CURRENT_WORKING_DIR . '/src/ShippingService.php'
			 ],

			 'DefaultEngine' => [
				 CURRENT_WORKING_DIR . '/src/ShippingMethods/DefaultEngine.php'
			 ],

			 'AmazonEngine' => [
				 CURRENT_WORKING_DIR . '/src/ShippingMethods/AmazonEngine.php'
			 ],
		];

		public static function autoload(){
			foreach (self::$classes as $className => $classPathList) {
				foreach ($classPathList as $classPath) {
					if(!file_exists($classPath)) {
						continue;
					}
					require_once $classPath;
				}
			}
		}
	}


