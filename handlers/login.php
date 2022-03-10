<?php
session_start();
require_once '../Dao.php';
$dao = new Dao();

$nick = $_POST['nickname'];
$pass = $_POST['password'];

$user = $dao->checkUserExists($nick, $pass);

if ($user == null or !isset($user)) {
    file_put_contents("../log.txt", "First or last name can't be empty\n", FILE_APPEND);
    $_SESSION['message'][] = "User not found";
}

if (count($_SESSION) > 0 ) {
    header('location: ../index.php');
    exit;
}

$_SESSION['username'] = $nick;

$_SESSION['message'][] = "User found";
header('location: ../index.php');
exit;