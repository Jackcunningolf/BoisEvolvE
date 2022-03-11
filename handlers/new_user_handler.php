<?php
session_start();
require_once '../Dao.php';
$dao = new Dao();

$fname = htmlspecialchars($_POST['first_name']);
$lname = htmlspecialchars($_POST['last_name']);
$nick = htmlspecialchars($_POST['nickname']);
$email = htmlspecialchars($_POST['email']);
$pass = htmlspecialchars($_POST['password']);

$dao->createNewUser($fname, $lname, $nick, $email, $pass);

$_SESSION['message'][] = "User created. Try logging in!";
$_SESSION['username'] = $nick;
header('location:../index.php');
exit;