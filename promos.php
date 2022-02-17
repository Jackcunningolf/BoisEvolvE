<link rel="stylesheet" href="userStyle.css">
<?php
       
class promo {

    public $promo_name;
    public $user_name;


    public function __construct($dfltPromo = "default promo") {
        $this->promo_name = $dfltPromo;
        echo "<div class='promo'> " .  $this->promo_name . "</div>";
    }

    public function getPromoName() {
        print($this->promo_name);
    }

    // public function create($title,)

    //make comment

    //delete comment
    
    public static function createHeader() { ?>
            <h1 class='header'>
                     <a href="index.php">
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

} ?>
