<?php
session_start();
require_once '../Dao.php';
$dao = new Dao();

$nick = $_POST['nickname'];
$pass = $_POST['password'];

if ($nick == null or $nick == "") {
  $_SESSION['message'][] = "Must supply both a username ";
  // header('location: ../home.php');
  // exit;
}

if ($pass == null or $pass == "") {
  $_SESSION['message'][] = "Must supply both a password.";
}
$user = $dao->getUser($nick);

if (!password_verify(htmlspecialchars($pass), $user['pass'])) {
    // file_put_contents("../log.txt", "User could not be found\n", FILE_APPEND);
    $_SESSION['message'][] = "User not found";
    
} else {
  $_SESSION['username'] = $nick;
    header('location: ../home.php');
    exit;
}

header('location: ../index.php');
exit;