<?php

namespace ENVProton;

class User extends Record
{
	public $name;
	public $username;
	public $password;
	private $fields;
	private $query;

	public function submit()
	{
		$fields = array("UID"=>$this->uid,
			"Name"=>$this->name,
			"Username"=>$this->username,
			"Password"=>password_hash($this->password, PASSWORD_DEFAULT)
		);

		$query = new DBQuery($fields, 'users');
		$query->submit();
	}
}