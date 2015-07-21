<?php

namespace ENVProton\Routers;

class URIRouter extends Router
{
	protected function parseRequest()
	{
		$q = $this->db->prepare("SELECT * FROM pages WHERE URI = :uri");
		$q->execute(array(":uri"=>$this->options->uri));

		$this->page = $q->fetch();

		$this->passToTemplateEngine();
	}

	protected function passToTemplateEngine()
	{
		/**
		 * Initialise template engine
		 */
		$template = new \ENVProton\Engines\TemplateEngine();
		$template->page = $this->page;

		/**
		 * Request template engine to run relevant to selected page
		 */
		$template->runLogic();
	}
}