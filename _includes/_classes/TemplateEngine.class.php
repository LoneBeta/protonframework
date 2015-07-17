<?php

namespace ENVProton;

class TemplateEngine extends Engine
{
	public function runLogic()
	{
		echo $this->page['Content'];
	}
}