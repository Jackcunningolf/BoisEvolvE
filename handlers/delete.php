<?php
require_once '../Dao.php';
require_once '../KLogger.php';
$dao = new Dao();

$dao->deletePromotion($_GET['id']);
echo "deleting promotion";

header('location: ../home.php');
exit;
