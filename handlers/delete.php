<?php
require_once '../Dao.php';
$dao = new Dao();

$promo_id = $_POST['promo_id'];
echo $promo_id;
// if ($_SESSION['delete_type'] == "comment") {
//     $dao->deleteComment($_GET['id']);
//     header("location: ../user_promo.php?{$promo_id}");
//     exit;
// } else {
//     $dao->deletePromotion($_GET['id']);
//     header('location: ../home.php');
//     exit;
// }

