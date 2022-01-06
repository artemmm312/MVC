<?php

namespace Models;

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
		return $this->connection
			->pdo
			->query("SELECT * FROM names")
			->fetchAll();
	}
}
