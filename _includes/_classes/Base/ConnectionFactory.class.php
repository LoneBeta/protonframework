<?php

namespace ENVProton\Base;

/**
 * These need to be moved into the main config file
 */
define('DATABASE_HOST',"localhost");
define('DATABASE_NAME',"proton");
define('DATABASE_USER',"proton");
define('DATABASE_PASSWORD',"Eu4frJaYEJmXKmLb");

class ConnectionFactory
{
	static $connection;

	public static function getConnection()
	{
		if(!self::$connection)
		{
			self::$connection = new \PDO('mysql:host='.DATABASE_HOST.'; dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);
			self::$connection->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
		}
		return self::$connection;
	}
}