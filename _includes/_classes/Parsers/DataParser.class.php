<?php

namespace ENVProton\Parsers;

abstract class DataParser
{
	abstract public function __construct();
	abstract public function parse();
}