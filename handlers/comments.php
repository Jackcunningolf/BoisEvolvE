<?php
session_start();
require_once '../Dao.php';
$dao = new Dao();

ini_set('display_errors', 1);

$comment = htmlspecialchars($_POST['comment']);
$promoid = $_POST['promo_id'];

echo $comment;
$dao->saveComment($_SESSION['username'], $promoid, $comment);

header("location: ../user_promo.php?id=$promoid");
exit;
