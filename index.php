<?php

/* namespace Connection;

use PDO;

class Connection
{
	private static $instance;
	private $pdo;

	private function __construct()
	{
		require_once 'configuration.php';
		$dsn = 'mysql:dbname=' . $conf['database'] . ';host=' . $conf['host'];
		$user = $conf['user'];
		$password = $conf['password'];
		$opt = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES   => false,
		];
		$this->pdo = new PDO($dsn, $user, $password, $opt);
	}

	public static function getInstance()
	{
		if (!isset(self::$instance))
			self::$instance = new self();
		return self::$instance;
	}

	public function __get($name)
	{
		if ($name === 'pdo')
			return $this->pdo;
	}

	private function __clone()
	{
	}

	public function __wakeup()
	{
		throw new \Exception("Cannot unserialize a singleton.");
	}
}


	function getAll()
	{
		$connection = Connection::getInstance();
		print_r($connection
			->pdo
			->query("SELECT * FROM names")
			->fetchAll());
	}
	
	getall(); */