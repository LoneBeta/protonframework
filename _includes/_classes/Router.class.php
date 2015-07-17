<?php

namespace ENVProton;

abstract class Router
{
	public function __construct($config)
	{
		/**
		 * Store database connection in object scope
		 */
		$this->db = ConnectionFactory::getConnection();

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
		$parseConfig = new ConfigParser();
		$parseConfig->config = $this->config();
	}

	abstract protected function parseRequest();
}