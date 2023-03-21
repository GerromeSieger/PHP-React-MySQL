<?php
	/**
	* Database Connection
	*/
	class DbConnect {
		private $server = 'mysql://root:root@mysql:33060/react_crud';
		private $dbname = 'react_crud';
		private $user = 'root';
		private $pass = 'root';

		public function connect() {
			try {
				$conn = new PDO('mysql://root:root@mysql:33060/react_crud');
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			} catch (\Exception $e) {
				echo "Database Error: " . $e->getMessage();
			}
		}
        
	}
?>