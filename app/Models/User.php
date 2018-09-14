<?php

namespace App\Models;
class User
{

	public $name;
	public $email;

	public function addUser($email, $name) {
		$this->name = $name;
		$this->email = $email;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getName() {
		return $this->name;
	}
}