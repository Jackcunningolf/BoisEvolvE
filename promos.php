<link rel="stylesheet" href="userStyle.css">
<?php
       
class promo {

    public $promo_title;
    public $promo_description;
    public $promo_text;
    public $user_name;


    public function __construct($dfltHead = "default title", $dfltDesc = "default description", $dfltPromo = "default promo") {
        $this->promo_title = $dfltHead;
        $this->promo_description = $dfltDesc;
        $this->promo_text = $dfltPromo;
        echo "<div class='promo'> " . 
                "<h3>" . $this->promo_title . "</h3>" . 
                "<p>" . $this->promo_description . "</p>" . 
                "<p>" . $this->promo_text . "</p>" . 
                "</div>";
    }

    public function getPromoName() {
        print($this->promo_name);
    }

    // public function create($title,)

    //make comment

    //delete comment
    
    

} ?>
