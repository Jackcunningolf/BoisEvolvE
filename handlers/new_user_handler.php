<?php
session_start();
require_once '../Dao.php';
$dao = new Dao();

$fname = htmlspecialchars($_POST['first_name']);
$lname = htmlspecialchars($_POST['last_name']);
$nick = htmlspecialchars($_POST['nickname']);
$email = htmlspecialchars($_POST['email']);
$pass = htmlspecialchars($_POST['password']);
$bio = htmlspecialchars($_POST['bio']);

$_SESSION['first_name'] = $fname;
$_SESSION['last_name'] = $lname;
$_SESSION['email'] = $email;
$_SESSION['bio'] = $bio;

if (!preg_match("/^[a-z ,.'-]+$/i", $fname) or !preg_match("/^[a-z ,.'-]+$/i", $lname)) {
    $_SESSION['message'] = "Name has invalid characters";
    header('location:../new_user.php');
    exit;
}

if (!preg_match("/^[A-Z0-9+_.-]+@[A-Z0-9.-]+$/i", $email)) {
    $_SESSION['message'] = "Please provide a valid email address";
    header('location:../new_user.php');
    exit;
}

$pass = password_hash($pass, PASSWORD_DEFAULT);
$dao->createNewUser($fname, $lname, $nick, $email, $pass, $bio);

$_SESSION['message'] = "User created. Try logging in!";
$_SESSION['username'] = $nick;
header('location:../index.php');
exit;

