<?php

namespace ENVProton;

abstract class DataParser
{
	abstract public function __construct();
	abstract public function parse();
}