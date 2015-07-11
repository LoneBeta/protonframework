<?php

namespace ENVProton;

spl_autoload_register(function ($class)
{
	$class = str_replace("ENVProton\\", "", $class);
    include '_includes/_classes/' . $class . '.class.php';
});