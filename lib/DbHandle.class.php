<?php namespace RainbowFuego\lib;

class DbHandle extends \PDO {
	
	public function __construct() {
		
		$dsn = \RainbowFuego\DB_DRIVER
		. ":host=" . \RainbowFuego\DB_HOST
		. ';port=' . \RainbowFuego\DB_PORT
		. ';dbname=' . \RainbowFuego\DB_NAME
		. ';';

		try {
	        parent::__construct($dsn, \RainbowFuego\DB_USER, \RainbowFuego\DB_PASS, array(
				\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8' COLLATE 'utf8_unicode_ci';",
				\PDO::ATTR_PERSISTENT => true
			));
			
			$this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		}
		
		catch (\PDOException $e) {
			Logger::error($e);
		}
	}
	
	public function __destruct() {
		// close db connection
	}
}