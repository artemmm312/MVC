<?php

namespace Models;

use Connection\Connection;

class Name
{
	private Connection $connection;

	public function __construct()
	{
		$this->connection = Connection::getInstance();
	}

	//Получаем данные из базы данных
	public function getValue(): array
	{
		return $this->connection
			->pdo
			->query("SELECT * FROM names")
			->fetchAll();
	}
}
