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
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];

$dao->saveComment($fname, $lname);



header('location: ../about.php');
exit;
