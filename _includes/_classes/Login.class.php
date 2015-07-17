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
		$this->fetchUser();

		if($this->validateHash())
		{
			UserRedirect::redirect("/dashboard.php");
		}
	}

	protected function validateHash()
	{
		return password_verify($this->password, $this->user->password);
	}

	protected function fetchUser()
	{
		$this->user = new UserSearch();
		$this->user->username = $this->username;

		$this->user->submit();
	}
}