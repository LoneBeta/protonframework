<?php

namespace ENVProton;

class UserSearch extends RecordSearch
{
	protected public function submit()
	{
		$q = $this->db->prepare("SELECT * FROM Users WHERE username = :username");
		$q->execute(array(":username"=>$this->username));

		return $q->fetch();
	}
}