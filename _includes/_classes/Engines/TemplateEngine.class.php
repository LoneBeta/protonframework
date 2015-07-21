<?php

namespace ENVProton\Engines;

class TemplateEngine extends Engine
{
	public function runLogic()
	{
		echo htmlentities($this->page['Content']);
	}
}