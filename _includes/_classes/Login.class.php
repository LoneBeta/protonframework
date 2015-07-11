<?php

namespace ENVProton;

class Login
{
	public function __construct()
	{		
		$this->db = ConnectionFactory::getConnection();
	}

	public function submit()
	{
		if($this->validateHash())
		{
			UserRedirect::redirect("/dashboard.php");
		}
	}

	protected function validateHash()
	{
		return password_verify($this->password, $this->user['Hash']);
	}

	protected function fetchUser()
	{
		$this->user = new User();
		$this->user->username = $this->username;

		$this->user = $this->user->submit();
	}
}