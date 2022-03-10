<?php
session_start();
$currentPage = "home";
require_once 'header.php';
require_once 'promos.php';
require_once 'feeds.php';
require_once 'nav.php'; 
if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'];
}
?>


<div>
    <a href="new_user.php">
        <?php new promo("Come down to boise brewing");    ?>
    </a>
</div>



<?php 
new promo("Come down to rhodes skatepark");
new promo("Come down to Boise state"); 

for ($i = 0; $i < 8; $i++) {
    new promo($i);
}

new promo();

require_once 'footer.php';
?>