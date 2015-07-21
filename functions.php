<?php

namespace ENVProton\Base;

spl_autoload_register(function ($class)
{
	$class = str_replace("ENVProton\\", "/", $class);
	$class = str_replace("\\", "/", $class);
    include '_includes/_classes' . $class . '.class.php';
});