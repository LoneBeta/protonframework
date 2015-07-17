<?php

namespace ENVProton;

abstract class RecordSearch
{
	public $result;

	public function __construct()
	{
		$this->db = ConnectionFactory::getConnection();
	}

	public function __get($name)
	{
		$name = ucfirst(preg_replace('/(?<!\ )[A-Z]/', '_$0', $name));

		return $this->result[$name];
	}

	abstract public function submit();
}