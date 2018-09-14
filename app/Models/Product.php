<?php
namespace App\Models;
/**
 * 
 */
class Product
{
	public $name;
	public $price;

	public function addProduct($name, $price) {
		$this->name = $name;
		$this->price = $price;
	}
}