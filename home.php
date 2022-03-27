<?php
session_start();
$currentPage = "home";
require_once 'header.php';
require_once 'promos.php';
require_once 'feeds.php';
require_once 'nav.php';
require_once 'Dao.php';
$dao = new Dao();

if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'] . "!";
}

?>

Make a <a href="handlers/promo_maker.php">new</a> promo

<?php $promotions = $dao->getPromotions(); ?>

<div id="promo_feed">
    <?php 
        foreach ($promotions as $promotion) {
            new promo($promotion['nickname'], $promotion['title'], $promotion['promo_description'], $promotion['promo_text']);
        } 
    ?>
</div>




<?php
require_once 'footer.php';
?>