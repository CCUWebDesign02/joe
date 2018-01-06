<?php

namespace Data;

class DataFactory {
	private $db;

	public function __construct() {
		$this->connect();
	}

	public function connect() {
		try {
			$config = parse_ini_file(BASE_PATH . DIRECTORY_SEPARATOR . 'config.ini');
			//$dsn = $config['DB_CONNECTION'] . ':host=' . $config['DB_HOST'] . ';port=' . $config['DB_PORT'] . ';daname=' . $config['DB_DATABASE'];
			$dsn = sprintf("%s:host=%s;port=%s;dbname=%s", $config['DB_CONNECTION'], $config['DB_HOST'], $config['DB_PORT'], $config['DB_DATABASE']);
			$this->db = new \PDO($dsn, $config['DB_USERNAME'], $config['DB_PASSWORD']);
			$this->db->exec("SET time_zone = 'UTC'");
			$this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			//echo 'success';
		}
		catch (\PDOException $e) {
			print "Couldn't connect to the database: " . $e->getMessage();
		}
	}

	public function disconnect() {
		$this->db = '';
	}

	public function getDB() {
		return $this->db;
	}

	public function __destruct() {
		$this->disconnect();
	}

}