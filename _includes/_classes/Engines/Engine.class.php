<?php

namespace ENVProton\Engines;

/**
 * Base engine class. Blueprints functionality for logic handlers
 *	
 * @abstract Engine
 */
abstract class Engine
{
	/**
	 * Base constructor used for storing/processsing
	 */
	public function __construct()
	{
		/**
		 * Stores database connection in object scope, free to be used later on
		 * @var ConnectionFactory
		 */
		$this->db = \ENVProton\Base\ConnectionFactory::getConnection();
	}

	/**
	 * No logic should be run here. It should simply call each of the classes required logical functions
	 * @return bool
	 */
	abstract public function runLogic();
}