<?php 

    class Sql {

        const HOSTNAME = "127.0.0.1";
        const USERNAME = "root";
        const PASSWORD = "";
        const DBNAME = "db_palestra";
        private $conn;

        public function __construct()
        {
            $this->conn = new \PDO(
                "mysql:dbname=".Sql::DBNAME.";host=".Sql::HOSTNAME, 
                Sql::USERNAME,
                Sql::PASSWORD
            );

            $this->conn->exec('set names utf8');

        }
        private function setParams($statement, $parameters = array())
        {
            foreach ($parameters as $key => $value) {
                
                $this->bindParam($statement, $key, $value);
            }
        }
        private function bindParam($statement, $key, $value)
        {
            $statement->bindParam($key, $value);
        }
        public function query($rawQuery, $params = array())
        {
            $stmt = $this->conn->prepare($rawQuery);
            $this->setParams($stmt, $params);
            $stmt->execute();
        }
        public function select($rawQuery, $params = array()):array
        {
            $stmt = $this->conn->prepare($rawQuery);
            $this->setParams($stmt, $params);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
}
 ?>