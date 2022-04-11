<!-- <link rel="stylesheet" href="userStyle.css">
<link rel="stylesheet" href="phpStyle.css> -->
<?php
session_start();
       
class promo {

    public $promo_promoter;
    public $promo_title;
    public $promo_description;
    public $promo_text;
    public $user_name;


    public function __construct($dfltPromoter = "default promoter", $dfltHead = "default title", $dfltDesc = "default description", $dfltPromo = "default promo", $id) {
        $this->promo_promoter = $dfltPromoter;
        $this->promo_title = $dfltHead;
        $this->promo_description = $dfltDesc;
        $this->promo_text = $dfltPromo;
        echo "<div class='promo'> " . 
                "<a href='user_promo.php?id={$id}'> <span class='promo_title'>" . $this->promo_title . "</span> </a>" . 
                "<p>" . $this->promo_description . "</p>" . 
                "<p>" . $this->promo_text . "</p>" . 
                "<a href='other_profile.php?name={$this->promo_promoter}'> <span class='promo_poster'> Posted by: " . $this->promo_promoter . "</span> </a>" .
                "<a href='user_promo.php?id={$id}'> <span class='promo_comments'> Comment </span> </a>"; 

                if ($_SESSION['username'] == $this->promo_promoter) {
                    echo " <a href='handlers/delete.php?id={$id}'> <span class='deletex'> X </span> </a>";
                    // echo "<style> .promo > a > .promo_comments { right: 80px } </style>";
                } 
                      
        echo "</div>";
    }

    public function getPromoName() {
        print($this->promo_name);
    }

    // public function create($title,)

    //make comment

    //delete comment
    
    

} ?>
