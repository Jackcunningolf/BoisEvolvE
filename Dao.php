<?php
require_once 'KLogger.php';

class Dao {
    private $dsn = "mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_8c0ea42fadc68d8;";
    private $db_user = "be8cd46d258529";
    private $pass = "9e4f054e";
    private $logger = null;
    private $current_time;

    // public function __construct() {
    //     $this->logger = new KLogger( "log.txt" , KLogger::WARN);
    // }

    public function getConnection () {
       // file_put_contents("log.txt", "grabbing connection...\n", FILE_APPEND);
       $this->current_time = new DateTime();
        try {
             return new PDO($this->dsn, 
                        $this->db_user, 
                        $this->pass);
        } catch (Exception $e) {
            $this->logger->LogFatal("The database exploded... " . print_r($e, 1));
            file_put_contents("log.txt", print_r($e->getMessage()));

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

    public function createNewUser ($f_name, $l_name, $nick, $email, $pass) {
        $connect = $this->getConnection();

        // $this->logger->LogInfo("created new user");
        
        $saveQ = "INSERT INTO promoter (first_name, last_name, nickname, email, pass)
        VALUES (:first_name, :last_name, :nickname, :email, :pass)";

        $q = $connect->prepare($saveQ);
        $q->bindParam(":first_name", $f_name);
        $q->bindParam(":last_name", $l_name);
        $q->bindParam(":nickname", $nick);
        $q->bindParam(":email", $email);
        $q->bindParam(":pass", $pass);
        $q->execute();
        file_put_contents("../log.txt", $this->current_time->format('Y-m-d H:i:s') . " | Created new user --> " . $f_name . " " . $l_name . "\n", FILE_APPEND);

    }

    public function deleteUser($id) {
        $connect = $this->getConnection();
        file_put_contents("../log.txt", $this->current_time->format('Y-m-d H:i:s') . " | User deleted --> id : {$id}\n", FILE_APPEND);
        $saveQ = "DELETE FROM promoter WHERE id = :id";
        $q = $connect->prepare($saveQ);
        $q->bindParam(":id", $id);
        $q->execute();
    }

    public function checkUserExists($nick, $pass) {
        

        // file_put_contents("../log.txt", $this->current_time->format('Y-m-d H:i:s') . " | Checking if user exists --> nick : {$nick}\n", FILE_APPEND);
        
        try {
            $connect = $this->getConnection();
            $saveQ = "SELECT * FROM promoter WHERE nickname=:nickname AND pass=:pass";
            $q = $connect->prepare($saveQ);
            $q->execute(['nickname' => $nick, 'pass' => $pass]);
            $user = $q->fetch();
            return $user;
        } catch (Exception $e) {
            $this->logger->LogFatal($e->getMessage());
            //echo $e->getMessage();
            exit;
        }
    }

    // have function that checks whether a certain field is in the database or not
}