<?
	use PDO;

	class database_connection
	{
		private $db;

		public function __construct()
		{
			$dbinfo = require 'dbinfo.php';
			$this->db = new PDO('mysql:host=' . $dbinfo['host'] . ';dbname=' . $dbinfo['dbname'], $dbinfo['login'], $dbinfo['password']);
		}

		public function getQuery($sql, $params = [])
		{
			$stmt = $this->db->prepare($sql);

			if (!empty($params))
			{
				foreach ($params as $key => $value)
				{
					$stmt->bindValue(":$key", $value);
				}
			}
			
			$stmt->execute();

			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getAll($table, $sql = '', $params = [])
		{
			return $this->getQuery("SELECT * FROM $table" . $sql, $params);
		}

		public function getRow($table, $sql = '', $params = [])
		{
			$result = $this->getQuery("SELECT * FROM $table" . $sql, $params);
			return $result[0]; 
		}

		public function closeConnection()
		{
			mysqli_close($db);
		}
	}
?>