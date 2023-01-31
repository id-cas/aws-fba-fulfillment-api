<?php

	namespace Entities;

	/**
	 * Interface EngineFactoryInterface
	 * @package App\Connection
	 */
	interface EngineFactoryInterface {

		/**
		 * Create storage access by $codeName
		 * @param string $codeName
		 * @return mixed
		 */
		public static function get(string $codeName);

		/**
		 * Create new storage access by $codeName
		 * @param string $codeName
		 * @return mixed
		 */
		public static function create(string $codeName);

	}
