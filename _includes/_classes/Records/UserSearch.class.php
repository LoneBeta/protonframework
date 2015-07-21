<?php

namespace ENVProton\Records;

class UserSearch extends RecordSearch
{
	public $result;

	public function submit()
	{
		$q = $this->db->prepare("SELECT * FROM users WHERE Username = :username");
		$q->execute(array(":username"=>$this->username));

		$this->result = $q->fetch();
	}
}