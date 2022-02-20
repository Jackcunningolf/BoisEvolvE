<?php
require_once 'Dao.php';
$dao = new Dao();

ini_set('display_errors', 1);

// file_put_contents(
//     "data.txt",
//     $_POST['first_name'] . "," . $_POST['last_name'] . "\n",
//     FILE_APPEND | LOCK_EX
// );

$dao->saveComment($_POST['first_name'], $_POST['last_name']);

header('location: about.php');
exit;
