<?php
$currentPage = "index";
require_once 'header.php';
require_once 'promos.php';
require_once 'feeds.php';
require_once 'nav.php'; 
?>


<!-- <div id="2" class="promo">
    Come down to rhodes skatepark
     <a href="contact.php">
        Click here to go to contact
    </a> -->

    <!-- <form method="post" action="index.php">
        <div>
            <label><input type="checkbox" name="birthday cake">birthday cake</label>
            <input type="checkbox" name="chocolate chip">chocolate chip 
            <input type="submit" value="submit">
        </div>
    </form> 
</div> -->
<?php 
new promo("Come down to boise brewing");
new promo("Come down to rhodes skatepark");
new promo("Come down to Boise state"); 

for ($i = 0; $i < 8; $i++) {
    new promo($i);
}

new promo();

require_once 'footer.php';
?>