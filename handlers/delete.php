<?php
require_once '../Dao.php';
$dao = new Dao();

$promo_id = $_GET['promo_id'];
$id = $_GET['id'];

if (isset($id) and isset($promo_id)) {
    $dao->deleteComment($id);
    header("location: ../user_promo.php?id={$promo_id}");
    exit;
} else {
    $dao->deletePromoComments($promo_id);
    $dao->deletePromotion($promo_id);
    header('location: ../home.php');
    exit;
}

