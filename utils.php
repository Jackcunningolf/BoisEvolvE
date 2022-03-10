<?php

class utils {


    public static function createHeader() { ?>
        <h1 class='header'>
                 <a href="home.php">
                        <div id="circ" class="header_item">
                               <img src="images/BlobGuy.png" alt="Shmeareian">
                        </div>
                 </a>

                 <span id="head_hello" >Welcome to Boise Flavors</span>
                 
                 <a href="user_profile.php">
                        <div id="userprofile" class="header_item"> User Profile </div>
                 </a>
          </h1>
<?php    }
}