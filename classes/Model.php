<?php

class Model {
	protected $dbh;
	protected $stmt;
	
	public function __construct() {
		$dsn       = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST;
		$this->dbh = new PDO( $dsn, DB_USER, DB_PASS );
	}
}