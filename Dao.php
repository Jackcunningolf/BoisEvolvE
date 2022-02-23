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
        $saveQ = "INSERT INTO promoter (first_name, last_name)
            VALUES (:first_name, :last_name)";

        $q = $connect->prepare($saveQ);
        $q->bindParam(":first_name", $f_name);
        $q->bindParam(":last_name", $l_name);
        $q->execute();
    }

    public function getComments () {
        $conn = $this->getConnection();
        return $conn->query("SELECT * FROM promoter");
    }

    public function createNewUser ($nick, $f_name, $l_name, $email, $pass) {
        $connect = $this->getConnection();
        $saveQ = "INSERT INTO promoter (nickname, first_name, last_name, email, pass)
            VALUES (:nickname, :first_name, :last_name, :email, :pass)";

        $q = $connect->prepare($saveQ);
        $q->bindParam(":nickname", $nick);
        $q->bindParam(":first_name", $f_name);
        $q->bindParam(":last_name", $l_name);
        $q->bindParam(":email", $email);
        $q->bindParam(":pass", $pass);
        $q->execute();
    }

    // have function that checks whether a certain field is in the database or not
}