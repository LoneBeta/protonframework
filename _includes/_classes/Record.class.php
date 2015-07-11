<?php

namespace ENVProton;

abstract class Record
{
	protected $db;

	public function __construct()
	{
		$this->db = new ConnectionFactory();
	}
}