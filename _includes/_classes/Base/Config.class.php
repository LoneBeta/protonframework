<?php

namespace ENVProton\Base;

class Config
{
	public function __construct()
	{
		$this->options = parse_ini_file("config.ini");
	}
}