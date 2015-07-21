<?php

namespace ENVProton\Logs;

class ErrorLog extends Log
{
	protected function submit()
	{
		$fields = array("Title"=>$this->title,
			"Description"=>$this->description,
			"Script"=>__FILE__
		);

		$query = new \ENVProton\Base\DBQuery($fields, 'errors');

		return $query->submit();
	}
}