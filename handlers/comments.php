<?php
require_once '../Dao.php';
require_once '../KLogger.php';
$dao = new Dao();

ini_set('display_errors', 1);

// file_put_contents(
//     "data.txt",
//     $_POST['first_name'] . "," . $_POST['last_name'] . "\n",
//     FILE_APPEND | LOCK_EX
// );
$fname = htmlspecialchars($_POST['first_name']);
$lname = $_POST['last_name'];
$fullname = $fname . " " . $lname;
$reg_pattern = "/\w+\s\w+/";
if (!preg_match($reg_pattern, $fullname)) {
    file_put_contents("../log.txt", "Invalid name format submitted\n", FILE_APPEND);
    header('location: ../about.php');
    exit;
}

$dao->createNewUser($fname, $lname, "test_nick","test_email", "test_pass");
//file_put_contents("../log.txt", "created new user " . $fname . " " . $lname . "\n", FILE_APPEND);


header('location: ../about.php');
exit;
