<?php

namespace ENVProton;

class UniqueID
{
	public static function generate()
	{
		return substr(base64_encode(mt_rand()), 0, 15);
	}
}