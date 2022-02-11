<?php
    $currentPage = "index";
    require_once 'header.php';  
     ?>
    <!-- <h1 id="header"> Welcome to Boise Flavors home </h1> -->
    <!-- </head> -->


<?php require_once 'feeds.php'; 
require_once 'nav.php';?>

<div id="1" class="promo">
    Come down to boise brewing
    <!-- <textarea rows="4" cols="20"> </textarea> -->
    <?php print $_SERVER["SERVER_NAME"]; ?>
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
    // echo "<pre>" . print_r($mydir, 1) . "</pre>"; ?>

</div>



<!-- <div id="4" class="promo">
    Come down to the grove
    <a href="about.php" id="test">   </a>
    we're on top of it!
</div> -->

<?php
    require_once 'footer.php';
?>



