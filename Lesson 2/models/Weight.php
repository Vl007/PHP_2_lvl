<?php


namespace App\models;


class Weight extends Product
{

	protected $weight;
	public $price;
	public $totalPrice;
	public function __construct($type ,$name, $price , $db , $weight) {
		$this->weight = $weight;
		parent::__construct($type ,$name, $price , $db);
	}



	protected function Price() {
		$this->totalPrice = $this->price * $this->weight;
		return $this->totalPrice;
	}


}
