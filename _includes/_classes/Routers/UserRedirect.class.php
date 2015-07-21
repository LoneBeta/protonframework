<?php

namespace ENVProton\Routers;

abstract class Redirect
{
	public static function redirect()
	{
		self::parseRedirect();

		echo '<meta http-equiv="refresh" content="0; url='.self::$redirectURL.'" />';
	}

	abstract public static function parseRedirect();
}

class UserRedirect extends Redirect
{
	public static function parseRedirect()
	{
		
	}
}