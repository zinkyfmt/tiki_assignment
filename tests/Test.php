<?php
/**
 * Created by PhpStorm.
 * User: tinh.pm
 * Date: 9/14/2018
 * Time: 1:44 PM
 */

class Test extends \PHPUnit_Framework_TestCase
{

	public function testTestCase1() {
		$user = new App\Models\User;
		$user->addUser('John.doe@gmail.com','John');
		$this->assertEquals($user->email,'John.doe@example.com');
		$this->assertEquals($user->name,'John');
		$cart = new App\Models\Cart($user);
		$product = new App\Models\Product();
		$product->addProduct('Apple',4.91);
		$cart->addProductToCart($product);
		$product->addProduct('Apple',4.91);
		$cart->addProductToCart($product);
		$product->addProduct('Orange',3.99);
		$cart->addProductToCart($product);

		$this->assertEquals($cart->totalPrice,(4.91 + 4.91 + 3.99));
	}

	public function testTestCase2() {
		$user = new App\Models\User;
		$user->addUser('John.doe@gmail.com','John');
		$this->assertEquals($user->email,'John.doe@example.com');
		$this->assertEquals($user->name,'John');
		$cart = new App\Models\Cart($user);
		$product = new App\Models\Product();
		$product->addProduct('Apple',4.91);
		$cart->addProductToCart($product);
		$product->addProduct('Apple',4.91);
		$cart->addProductToCart($product);
		$product->addProduct('Apple',4.91);
		$cart->addProductToCart($product);
		$product->name = 'Apple';
		$product->price = 4.91;
		$cart->removeProduct($product);


		$this->assertEquals($cart->totalPrice,(4.91 + 4.91 + 4.91 - 4.91));
	}
}