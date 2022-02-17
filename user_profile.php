<?php
require_once 'header.php';
require_once 'promos.php';
?>

<link rel="stylesheet" href="userStyle.css">


<!-- <div id='user_header'>
    <h1>
        <span id="user_hello"> Hello</span> 
        <a href="index.php">
            <div id="circ">
                <img src="images/BlobGuy.png" alt="Blob dude">
            </div>
        </a>
    </h1>
</div> -->



<div id="user_bio">
    User bio
</div>

Your Posts:
<?php for ($i = 0; $i < 10; $i++) {
            new promo($i);
        }
        ?>