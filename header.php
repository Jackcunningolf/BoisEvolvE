<html>
    <head>
        <link rel="stylesheet" href="phpstyle.css">

     <?php if ($currentPage  == "index") { ?>
         
            <h1 id='header'> 
                   <a href="index.php">
                        <div id="circ">  </div>  
                   </a>
               
                     Welcome to Boise Flavors home 
               <a href="user_profile.php">
                <div id="userprofile"> User Profile </div>
               </a>  
            </h1>
            
     <?php } elseif ($currentPage == "contact") { ?>
            <h1 id='header'> Welcome to Boise Flavors contact </h1>
     <?php } elseif($currentPage == "about") {  ?>
            <h1 id='header'> Welcome to Boise Flavors about </h1>
     <?php } ?>
      

      
    </head>