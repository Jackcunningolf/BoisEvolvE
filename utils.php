<?php
session_start();

class utils {

    public static function createComment($nickname, $comment, $comm_id, $promo_id) { ?>
              <div class="promo_comment">
                     <p> <?=$comment?> </p>
       <?php        echo " <a href='other_profile.php?name={$nickname}'> <span class='promo_poster'> Posted by: {$nickname} </span> </a>";
              if ($_SESSION['username'] == $nickname) {
                     $_SESSION['delete_type'] = "comment";
                    echo " <a href='handlers/delete.php?id={$comm_id}&promo_id={$promo_id}'> <span class='delete_comment'> X </span> </a>";
                } ?>
              </div>


<?php    } 

    public static function createHeader() { ?>
        <h1 class='header'>
                 <a href="home.php">
                        <div id="circ" class="header_item">
                               <img src="images/BlobGuy.png" alt="Shmeareian", title="Go to home page">
                        </div>
                 </a>

                 <span id="head_hello" >Welcome to Boise Flavors</span>
                 
                 <a href="user_profile.php">
                        <div id="userprofile" class="header_item"> User Profile </div>
                 </a>
          </h1>
<?php    }

       public static function createHomeHeader() { ?>
              <h1 class='header'>
                     <a href="home.php">
                            <div id="circ" class="header_item">
                                   <img src="images/BlobGuy.png" alt="Shmeareian", title="Go to home page">
                            </div>
                     </a>

                     <span id="head_hello" >
                            Welcome to Boise Flavors 
                            <?php if (isset($_SESSION['username'])) {
                                   echo $_SESSION['username'] . " !";
                                   } ?>
                     </span>
                     
                     <a href="user_profile.php", title = "Go to your profile">
                            <div id="userprofile" class="header_item"> User Profile </div>
                     </a>

                     <a href="promo_maker.php", title="Make a new post">
                            <div id="userprofile" class="header_item"> New Post </div>
                     </a>
                     
              </h1>
<?php  }

       public static function createLoginHeader() { ?>
              <h1 class='header'>
                     <a href="index.php">
                            <div id="circ" class="header_item">
                                   <img src="images/BlobGuy.png" alt="Shmeareian", title="Go to home page">
                            </div>
                     </a>

                     <span id="head_hello" >
                            Welcome to Boise Flavors 
                     </span>
                     
              </h1>



<?php  }

}

       