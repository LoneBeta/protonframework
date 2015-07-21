<?php

namespace ENVProton\Parsers;

class ConfigParser extends DataParser
{
	public function __construct()
	{
		//
	}

	public function parse()
	{
		foreach ($this->config as $key => $option)
		{
			$this->$key = $option;
		}
	}
}