<?php

namespace ENVProton\Logs;

abstract class Log
{
	public function __construct($title,$description)
	{
		$this->db = \ENVProton\Base\ConnectionFactory::getConnection();
		$this->title = $title;
		$this->description = $description;

		$this->response =  $this->submit();
	}

	abstract protected function submit();
}