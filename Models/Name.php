<?php

namespace Model;

use Connection\Connection;

class Name
{
	private $connection;

	public function __construct()
	{
		$this->connection = Connection::getInstance();
	}

	public function getValue()
	{
		$result = $this->connection
			->pdo
			->query("SELECT * FROM names")
			->fetchAll();
		return $result;
	}
}
