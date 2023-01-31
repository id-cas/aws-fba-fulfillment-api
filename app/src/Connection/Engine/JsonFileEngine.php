<?php

namespace App\Engine;

use Entities\Engine;
use Exception;


/** Amazon shipping functionality */
class JsonFileEngine extends Engine {
	private string $filesPath;

	public function __construct(){
	}

	/**
	 * Set connection to data source
	 * @param string $filesDir
	 * @throws Exception
	 */
	public function setConnection(string $filesDir){
		if(!is_dir($filesDir)){
			throw new Exception('Exception:'. __CLASS__. '_'. __METHOD__. ' directory "'. $filesDir. '" does note exists.');
		}

		$this->filesPath = $filesDir;
	}

	/**
	 * Read data from JSON file
	 *
	 * @param string $document - 'order' или 'buyer'
	 * @param int $id
	 * @return array
	 */
	public function read(string $document, int $id):array {
		$filePath = $this->filesPath. '/'. $document. '.'. $id. '.json';

		if(!file_exists($filePath)){
			return [];
		}

		// Get file content and try to parser file content as JSON
		try {
			return json_decode(file_get_contents($filePath), true);
		} catch (Exception $e) {
			return [];
		}
	}
}