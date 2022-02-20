<?php

class Dao {
    private $dsn = "mysql:host=localhost;dbname=boise_flavors;";
    private $db_user = "jack";
    private $pass = "Sql_werety<3";

    public function getConnection () {
        return new PDO($this->dsn, 
                        $this->db_user, 
                        $this->pass);
    }

    public function saveComment ($f_name, $l_name) {
        $connect = $this->getConnection();
        $saveQ = "INSERT INTO test (first_name, last_name)
            VALUES (:first_name, :last_name)";

        $q = $connect->prepare($saveQ);
        $q->bindParam(":first_name", $f_name);
        $q->bindParam(":last_name", $l_name);
        $q->execute();
    }

    public function getComments () {
        $conn = $this->getConnection();
        return $conn->query("SELECT * FROM test");
      }
}