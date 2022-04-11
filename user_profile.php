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

<?php require_once 'feeds.php'; ?>

<a href="handlers/logout_handler.php">
  <div id="user_logout">
  Log out
  </div>
</a>

<a href="edit.php">
  <div id="user_logout">
  Edit
  </div>
</a>

<div id="user_bio">
  <?php 
    echo $_SESSION['username'] . "'s bio" . "<br>"; 
    $bio = $dao->getUserBio($_SESSION['username']);
    echo $bio['bio'];
  ?>
</div>

<?php 
  $promotions = $dao->getUserPromotions($_SESSION['username']);
  $promotions = array_reverse($promotions);
?>

<div class="promo_feed">
    <?php 
        foreach ($promotions as $promotion) {
            new promo($promotion['nickname'], $promotion['title'], $promotion['promo_description'], $promotion['promo_text'], $promotion['promo_id']);
        } 
    ?>

</div>

