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
                            <div id="circ">
                                   <img src="images/BlobGuy.png" alt="Shmeareian">
                            </div>
                     </a>
                     Welcome!
              
                     <a href="user_profile.php">
                            <div id="userprofile"> User Profile </div>
                     </a>
            </h1>
<?php    }

} ?>
