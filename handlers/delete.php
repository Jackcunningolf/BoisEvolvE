<?php
require_once '../Dao.php';
require_once '../KLogger.php';
$dao = new Dao();

ini_set('display_errors', 1);
$dao->deleteUser($_GET['id']);
header('location: ../about.php');
exit;
echo "hi";