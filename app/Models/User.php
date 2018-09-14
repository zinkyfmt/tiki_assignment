<?php

namespace App\Models;
class User
{

	public $name;
	public $email;
	public $_shoppingCart;

	public function addUser($email, $name) {
		$this->name = $name;
		$this->email = $email;
		$cart = new Cart;
		$this->_shoppingCart = $cart->getShoppingCartByEmail($email);
	}

	public function getEmail() {
		return $this->email;
	}

	public function getName() {
		return $this->name;
	}
}