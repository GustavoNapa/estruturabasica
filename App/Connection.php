<?php 
	namespace App;

	/**
	 * 
	 */
	class Connection
	{
		public function getDB()
		{
			// charset=utf8
			try {
				$conn = new \PDO("mysql: ")
			} catch (\PDOException $e) {
				echo $e;
			}
		}
	}
?>