<?php
require_once 'Dao.php';
$dao = new Dao();

ini_set('display_error', 1);
// echo print_r($_POST, 1);
$pass = $_POST['password'];
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$nick = $_POST['nickname'];
$email = $_POST['email'];

$dao->createNewUser($nick, $fname, $lname, $email, $pass);

header('location: user_profile.php');
exit;