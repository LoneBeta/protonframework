<?php

namespace ENVProton;

class ErrorLog extends Log
{
	protected function submit()
	{
		$fields = array("Title"=>$this->title,
			"Description"=>$this->description,
			"Script"=>__FILE__
		);

		$query = new DBQuery($fields, 'errors');

		return $query->submit();
	}
}