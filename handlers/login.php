<?php
session_start();
require_once '../Dao.php';
$dao = new Dao();

$nick = $_POST['nickname'];
$pass = $_POST['password'];

$user = $dao->checkUserExists($nick, $pass);

// echo $user['nickname'] . "\n";
// echo $user['pass'];

if (!isset($user['nickname']) ) {
    file_put_contents("../log.txt", "User could not be found\n", FILE_APPEND);
    $_SESSION['message'][] = "User not found";
    header('location: ../index.php');
    exit;
} else {
  $_SESSION['username'] = $nick;
    header('location: ../home.php');
    exit;
}
