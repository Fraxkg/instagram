<?php 
	class DB{
		private $host = 'localhost';
		private $dbName= 'instagram';
		private $username= 'root';
		private $password= 'root';


		public function __construct()
		{

		}
		public function getConnection()
		{
			$dsn = "mysql:host=".$this->host.";dbname=".$this->dbName.";password=".$this->$password;
			$conn = new PDO($dsn, $this->username, $this->password);
			$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $conn;
		}
	}
 ?>