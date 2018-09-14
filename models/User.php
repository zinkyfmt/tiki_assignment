<?php

class User
{


	public $name;
	public $email;
	public $_shoppingCart;

	function __construct($email, $name, $product = [])
	{
		$this->name = $name;
		$this->email = $email;
		if (!empty($product)) {
			$this->_shoppingCart = new Cart($product);
		}
		# code...
	}


	
}