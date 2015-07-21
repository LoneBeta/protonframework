<?php

namespace ENVProton\Base;

class DBQuery
{
	private $fieldName;
	private $fieldValue;
	private $fieldUpdateString;
	private $sql;

	private $insertFields = array();
	private $insertValues = array();
	private $updateValues = array();
	private $preparedValues = array();

	public function __construct($fields, $table)
	{
		$this->db = ConnectionFactory::getConnection();

		$this->table = $table;
		$this->fields = $fields;

		$this->parseValues();
	}

	protected function parseValues()
	{
		$this->insertFields = array();
		$this->insertValues = array();
		$this->updateValues = array();

		foreach ($this->fields as $field => $value)
		{
			$fieldName = $field;
			$fieldValue = $this->fieldToParameter($field);
			$fieldUpdateString = "$fieldName = values($fieldName)";

			array_push($this->insertFields, $fieldName);
			array_push($this->insertValues, $fieldValue);
			array_push($this->updateValues, $fieldUpdateString);

			$this->preparedValues[$fieldValue] = $value;
		}

		$this->insertFields = implode(", ", $this->insertFields);
		$this->insertValues = implode(", ", $this->insertValues);
		$this->updateValues = implode(", ", $this->updateValues);
	}

	public function submit()
	{
		$sql =  "INSERT INTO $this->table ($this->insertFields) VALUES ($this->insertValues) ON DUPLICATE KEY UPDATE $this->updateValues";

		$q = $this->db->prepare($sql);
		
		$response = $q->execute($this->preparedValues);

		return ($response ? $response : $q->errorCode());
	}

	protected function strto($str)
	{
		return preg_split('/(?=[A-Z])/',$str);
	}

	protected function fieldToParameter($field) //"Field_Name"
	{
		return ":" . str_replace("_","", lcfirst($field));		
	}
}