<?php

namespace ENVProton;

abstract class RecordSearch
{
	abstract function __construct()
	{
		$this->db = ConnectionFactory::getConnection();
	}

	abstract public function submit();
}