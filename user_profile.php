<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location: index.php');
  exit;
}

require_once 'header.php';
require_once 'promos.php';
require_once 'Dao.php';
$dao = new Dao();
?>

<link rel="stylesheet" href="styles/phpStyle.css">
<link rel="stylesheet" href="styles/userStyle.css">

<div id="leftfeed" class="feeds">
    This is the feed on the left side
</div>

<a href="handlers/logout_handler.php">Log out</a>

<div id="user_bio">
  <?php 
    echo $_SESSION['username'] . "'s bio" . "<br>"; 
    $bio = $dao->getUserBio($_SESSION['username']);
    echo $bio['bio'];
  ?>
</div>

<?php $promotions = $dao->getUserPromotions($_SESSION['username']); ?>

<div id="promo_feed">
    <?php 
        foreach ($promotions as $promotion) {
            new promo($promotion['nickname'], $promotion['title'], $promotion['promo_description'], $promotion['promo_text']);
        } 
    ?>

</div>

