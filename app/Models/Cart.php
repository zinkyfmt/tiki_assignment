<?php
namespace App\Models;
/**
 * 
 */
class Cart
{
	public $id;
	protected $_products = [];
	public $totalPrice = 0;
	public $_user;

	public function __construct($user = null)
	{
		$this->_user = $user;
		# code...
	}

	public function addProductToCart($products) {

		if (!is_array($products)) {
			$products = [$products];
		}
		foreach ($products as $product) {
			$this->addSingleProduct($product);
		}
	}

	public function addSingleProduct($product) {

		$this->_products[] = $product;
		$this->totalPrice += $product->price;
	}

	public function removeProduct($product) {

		if(($key = array_search($product, $this->_products, TRUE)) !== FALSE) {
			unset($this->_products[$key]);
			$this->totalPrice -= $product->price;
		}
	}

	public function getShoppingCartByEmail($email) {
		if ($email == $this->_user) {
			return $this;
		}
		return false;
	}

	public function getProductListInCart() {
		return $this->_products;
	}

}