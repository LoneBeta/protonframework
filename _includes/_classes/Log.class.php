<?php

namespace ENVProton;

abstract class Log
{
	public function __construct($title,$description)
	{
		$this->db = ConnectionFactory::getConnection();
		$this->title = $title;
		$this->description = $description;

		$this->response =  $this->submit();
	}

	abstract protected function submit();
}