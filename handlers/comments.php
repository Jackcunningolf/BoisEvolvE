<?php
session_start();
require_once '../Dao.php';
$dao = new Dao();

ini_set('display_errors', 1);

$comment = htmlspecialchars($_POST['comment']);

echo $comment;
$dao->saveComment($_SESSION['username'], $comment);

// header('location: ../about.php');
// exit;
