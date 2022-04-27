<?php
session_start();

require_once 'header.php';
require_once 'promos.php';
require_once 'Dao.php';
require_once 'feeds.php'; 

$dao = new Dao();
$name = $_GET['name'];
if ($name == $_SESSION['username']) {
  header('location: user_profile.php');
  exit;
}
?>

<link rel="stylesheet" href="styles/phpStyle.css">
<link rel="stylesheet" href="styles/userStyle.css">


<div id="user_bio">
  <?php 
    echo $name . "'s bio" . "<br>"; 
    $bio = $dao->getUserBio($name);
    echo $bio['bio'];
  ?>
</div>

<?php 
  $promotions = $dao->getUserPromotions($name); 
  // $promotions = array_reverse($promotions);
?>

<div class="promo_feed">
    <?php 
        foreach ($promotions as $promotion) {
            new promo($promotion['nickname'], $promotion['title'], $promotion['promo_description'], $promotion['promo_text'], $promotion['promo_id']);
        } 
    ?>

</div>

<?php require_once 'footer.php'; ?>
