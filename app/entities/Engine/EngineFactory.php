<?php

	namespace Entities;

	use Exception;

	/**
	 * Class EngineFactory for reading JSON data from specified source
	 * @package App\Connection
	 */
	class EngineFactory implements EngineFactoryInterface {

		/** @var engineInterface[] $engineList list of created engines */
		protected static array $engineList = [];

		/**
		 * @param $codeName
		 * @return engineInterface
		 */
		public static function get(string $codeName):engineInterface {
			if (isset(self::$engineList[$codeName])) {
				return self::$engineList[$codeName];
			}

			return self::$engineList[$codeName] = self::create($codeName);
		}

		/**
		 * @param string $codeName
		 * @return engineInterface
		 */
		public static function create(string $codeName):engineInterface {
			$className = self::getClassByCode($codeName);

			if (class_exists($className)) {
				$engine = new $className();

				if (!$engine instanceof engineInterface) {
					throw new Exception('Wrong engine class with code name: ' . $codeName);
				}

				return $engine;
			}

//			// DEPRECATED AFTER OPTIMIZATION
//			if (class_exists($className)) {
//				return new $className();
//			}
//
//			$classPath = self::getClassPathByCode($codeName);
//			if (!file_exists($classPath)) {
//				throw new Exception('Including file of engine realization with code name: ' . $codeName . ' failed');
//			}
//
//
//			/** @noinspection PhpIncludeInspection */
//			include_once $classPath;
//			if (!class_exists($className)) {
//				throw new Exception('Including class of engine realization with code name: ' . $codeName . ' failed');
//			}
//
//			$engine = new $className();
//			if (!$engine instanceof engineInterface) {
//				throw new Exception('Wrong engine class with code name: ' . $codeName);
//			}
//
//			return $engine;
		}

		/**
		 * Return full path of class with engine realization
		 * @param string $codeName
		 * @return string
		 */
		protected static function getClassByCode(string $codeName):string {
			return 'App\Engine\\' . $codeName. 'Engine';
		}

//		// DEPRECATED AFTER OPTIMIZATION
//		/**
//		 * Return path to the file of engine realization
//		 * @param string $codeName engine code name
//		 * @return string
//		 */
//		protected static function getClassPathByCode(string $codeName):string {
//			return dirname(__FILE__) . "/Engine/{$codeName}Engine.php";
//		}
	}
