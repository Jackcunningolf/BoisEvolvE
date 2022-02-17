<?php
$currentPage = "index";
require_once 'header.php';
require_once 'promos.php';
?>
<!-- <h1 id="header"> Welcome to Boise Flavors home </h1> -->
<!-- </head> -->


<?php require_once 'feeds.php';
require_once 'nav.php'; ?>


<div id="1" class="promo">
    Come down to boise brewing here:
    <a href="individual_post.php">
        <span id="promo_link">Welcome!</span>
    </a>
</div>





<div id="2" class="promo">
    Come down to rhodes skatepark
    <a href="contact.php">
        Click here to go to contact
    </a>

    <!-- <form method="post" action="index.php">
        <div>
            <label><input type="checkbox" name="birthday cake">birthday cake</label>
            <input type="checkbox" name="chocolate chip">chocolate chip 
            <input type="submit" value="submit">
        </div>
    </form> -->
</div>

<div id="3" class="promo">
    Come down to Boise state

    <form method="POST" action="index.php">
        <!-- <input type="radio" name="color" value="blue">blue  -->
        <input type="radio" name="color" value="green"> green
        <input type="radio" name="color" value="red"> red
        <input type="submit" value="submit">
    </form>


    <?php $mydir = glob("*.php");
    // echo "<pre>" . print_r($mydir, 1) . "</pre>"; 
    ?>

</div>

<?php
// $bPromo = new promo("hello there");
// $bPromo->getPromoName();

for ($i = 0; $i < 8; $i++) {
    new promo($i);
}

new promo();
?>




<!-- <div id="4" class="promo">
    Come down to the grove
    <a href="about.php" id="test">   </a>
    we're on top of it!
</div> -->

<?php
require_once 'footer.php';
?>