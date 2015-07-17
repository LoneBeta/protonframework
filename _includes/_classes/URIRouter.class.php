<?php

namespace ENVProton;

class URIRouter extends Router
{
	protected function parseRequest()
	{
		$q = $this->db("SELECT * FROM pages WHERE URI = :uri");
		$q->execute(array(":uri"=>$this->config->uri));

		$this->page = $q->fetch();

		$this->passToTemplateEngine();
	}

	protected function passToTemplateEngine()
	{
		/**
		 * Initialise template engine
		 */
		$template = new TemplateEngine();
		$template->page = $this->page;

		/**
		 * Request template engine to run relevant to selected page
		 */
		$template->runLogic();
	}
}