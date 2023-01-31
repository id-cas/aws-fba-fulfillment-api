<?php

namespace App\Engine;

use Entities\Engine;
use Exception;


/** Amazon shipping functionality */
class MongoDbEngine extends Engine {
	public function __construct(){

	}

	/**
	 * Set connection to data source
	 * @param string $params
	 * @throws Exception
	 */
	public function setConnection(string $params){
	}

	/**
	 * Read data from JSON file
	 *
	 * @param string $document - 'order' или 'buyer'
	 * @param int $id
	 * @return array
	 */
	public function read(string $document, int $id):array {

	}
}