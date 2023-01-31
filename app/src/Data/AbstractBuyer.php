<?php

namespace App\Data;


abstract class AbstractBuyer implements BuyerInterface {
	private int $id;
	public ?array $data;

	abstract protected function loadBuyerData(int $id): array;

	public function __construct(int $id) {
		$this->id = $id;
	}

	final public function getBuyerId(): int {
		return $this->id;
	}

	final public function load(): void {
		$this->data = $this->loadBuyerData($this->getBuyerId());
	}

	public function offsetExists($offset):bool {
		return isset($this->data[$offset]);
	}

	public function offsetGet($offset) {
		return isset($this->data[$offset]) ? $this->data[$offset] : null;
	}

	public function offsetSet($offset, $value):void {
		if (is_null($offset)) {
			$this->data[] = $value;
		} else {
			$this->data[$offset] = $value;
		}
	}

	public function offsetUnset($offset):void {
		unset($this->data[$offset]);
	}

}