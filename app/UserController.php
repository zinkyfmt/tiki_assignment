<?php
require_once('Models/User.php');
require_once('Models/Cart.php');
require_once('Models/Product.php');

$userControler = new UserController;
$request = $_REQUEST;
if (isset($request['action'])) {
	switch ($request['action']) {
		case 'addUser':
			$userControler->addUser();
			# code...
			break;
		
		default:
			$userControler->index();
			# code...
			break;
	}
} else {
	$userControler->index();
}

/**
 * 
 */
class UserController
{
	public function index(){
		$user = new App\Models\User;
		$user->addUser('John.doe@gmail.com','John');
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
		var_dump($cart->totalPrice);
		die('Please correct the request!');
	}

	public function addUser() {
		$email = $_REQUEST['email'];
		$name =  $_REQUEST['name'];
		$user = new User($email, $name);
		echo json_encode($user);
		exit();
	}
}