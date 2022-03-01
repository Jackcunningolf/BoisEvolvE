<?php
require_once 'KLogger.php';

class Dao {
    private $dsn = "mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_8c0ea42fadc68d8;";
    private $db_user = "be8cd46d258529";
    private $pass = "9e4f054e";
    private $logger = null;

    public function __construct() {
        $this->logger = new KLogger( "log.txt" , KLogger::WARN);
    }

    public function getConnection () {
        $this->logger->LogDebug("grabbing connection..");
        try {
             return new PDO($this->dsn, 
                        $this->db_user, 
                        $this->pass);
        } catch (Exception $e) {
            $this->logger->LogFatal("The database exploded... " . print_r($e, 1));
            exit;
        }
       
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

    public function getUsers () {
        try {
            $connect = $this->getConnection();
            return $connect->query("SELECT * FROM promoter");
        } catch (Exception $e) {
            $this->logger->LogFatal($e->getMessage());
            //echo $e->getMessage();
            exit;
        }
        
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

    public function deleteUser($id) {
        $connect = $this->getConnection();
        $saveQ = "DELETE FROM promoter WHERE id = :id";
        $q = $connect->prepare($saveQ);
        $q->bindParam(":id", $id);
        $q->execute();
    }

    // have function that checks whether a certain field is in the database or not
}