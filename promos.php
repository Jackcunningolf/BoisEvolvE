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
    
    

} ?>
