<?php
require_once '../Dao.php';
require_once '../KLogger.php';
$dao = new Dao();

ini_set('display_errors', 1);

// if (isset($_GET['id'])) {
//     $dao->deleteUser($_GET['id']);
//     echo "deleting user";
// } 

    $dao->deletePromotion($_GET['id']);
    echo "deleting promotion";



header('location: ../home.php');
exit;
