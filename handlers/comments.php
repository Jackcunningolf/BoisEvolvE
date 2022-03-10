<?php
session_start();
require_once '../Dao.php';
$dao = new Dao();

ini_set('display_errors', 1);

$fname = htmlspecialchars($_POST['first_name']);
$lname = htmlspecialchars($_POST['last_name']);
$fullname = $fname . " " . $lname;

if ($fname == "" or $lname == "") {
    file_put_contents("../log.txt", "First or last name can't be empty\n", FILE_APPEND);
    $_SESSION['message'][] = "First or last name can't be empty";   
}

$fullname_pattern = "/[^\d]/";
if (!preg_match($fullname_pattern, $fname) or !preg_match($fullname_pattern, $lname)) {
    file_put_contents("../log.txt", "Invalid name submitted\n", FILE_APPEND);
    $_SESSION['message'][] = "Invalid name submitted";
}

$reg_pattern = "/\w+\s\w+/";
if (!preg_match($reg_pattern, $fullname)) {
    file_put_contents("../log.txt", "Invalid name format submitted\n", FILE_APPEND);
    $_SESSION['message'][] = "Invalid name format submitted";
}

if (count($_SESSION) > 0 ) {
    header('location: ../about.php');
    exit;
}
$dao->createNewUser($fname, $lname, "test_nick","test_email", "test_pass");
//file_put_contents("../log.txt", "created new user " . $fname . " " . $lname . "\n", FILE_APPEND);


header('location: ../about.php');
exit;
