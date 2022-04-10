<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: index.php');
    exit;
  }
?>

<script src = "node_modules/jquery/dist/jquery.min.js"></script>
<script src = "js/fadePromo.js"></script>

<?php
$currentPage = "home";
require_once 'header.php';
require_once 'promos.php';
require_once 'feeds.php';
require_once 'nav.php';
require_once 'Dao.php';
$dao = new Dao();

$promotions = $dao->getPromotions(); 
$promotions = array_reverse($promotions);
?>

<div class="promo_feed">
    <?php 
        foreach ($promotions as $promotion) {
            new promo($promotion['nickname'], $promotion['title'], $promotion['promo_description'], $promotion['promo_text'], $promotion['promo_id']);
        } 
    ?>
</div>




<?php
require_once 'footer.php';
?>
