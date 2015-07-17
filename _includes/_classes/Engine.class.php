<?php

namespace ENVProton;

/**
 * Base engine class. Blueprints functionality for logic handlers
 *	
 * @abstract Engine
 */
abstract class Engine
{
	public function __construct()
	{
		$this->db = ConnectionFactory::getConnection();
	}

	abstract public function runLogic();
}