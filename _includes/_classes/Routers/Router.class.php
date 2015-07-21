<?php

namespace ENVProton\Routers;

abstract class Router
{
	public function __construct($config)
	{
		/**
		 * Store database connection in object scope
		 */
		$this->db = \ENVProton\Base\ConnectionFactory::getConnection();

		/**
		 * Store injected config in object scope
		 */
		$this->config = $config;

		/**
		 * Parse injected config into readable format
		 */
		$this->options = $this->parseConfig();

		/**
		 * Call object scope request parse
		 */
		$this->parseRequest();
	}

	protected function parseConfig()
	{
		$parseConfig = new \ENVProton\Parsers\ConfigParser();
		$parseConfig->config = $this->config;		
		$parseConfig->parse();

		return $parseConfig;
	}

	abstract protected function parseRequest();
}