<?php
require_once('../models/User.php');

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