<?php   
session_start();
require_once 'header.php';
require_once 'promos.php';
require_once 'feeds.php';
require_once 'Dao.php';
$dao = new Dao();

$promotion = $dao->getPromotion($_GET['id']);
// echo print_r($promotions, 1);
?>

<div class="promo_feed">
    <?php 
        new promo($promotion['nickname'], $promotion['title'], $promotion['promo_description'], $promotion['promo_text'], $promotion['promo_id']);
    ?>
</div>

<?php require_once 'footer.php'; ?>

