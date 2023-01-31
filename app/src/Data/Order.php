<?php

namespace App\Data;

use Entities\EngineFactory;

class Order extends AbstractOrder {
	private object $connection;

	/**
	 * Some "decorated" constructor to init specified type connection order data source
	 * Order constructor.
	 * @param int $id
	 * @param string $dataSourceType
	 */
	public function __construct(int $id, string $dataSourceType){
		// Init parent class required parameter
		parent::__construct($id);

		// Init connection to data source
		$this->connection = EngineFactory::get($dataSourceType);
		$this->connection->setConnection(CURRENT_WORKING_DIR. '/mock');
	}

	public function loadOrderData(int $id):array {
		return $this->connection->read('order', $id);
	}
}