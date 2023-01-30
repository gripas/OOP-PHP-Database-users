<?php
 class DB{
	  private $host;
	  private $user;
	  private $pass;
	  private $db;
	  public $mysqli;

	  public function __construct() {
		$this->db_connect();
	  }

	  private function db_connect(){
		$this->host = 'localhost';
		$this->user = 'root';
		$this->pass = ''; // Database password
		$this->db = '';// Database name

		$this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
		return $this->mysqli;
	  }
  }
?>
