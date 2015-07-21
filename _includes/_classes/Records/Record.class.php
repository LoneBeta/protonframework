<?php

namespace ENVProton\Records;

abstract class Record
{
	protected $db;

	public function __construct()
	{
		$this->db = \ENVProton\Base\ConnectionFactory::getConnection();
	}
}