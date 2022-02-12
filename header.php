<html>

<head>
       <link rel="stylesheet" href="phpstyle.css">

       <?php if ($currentPage  == "index") { ?>

              <h1 class='header'>
                     <a href="index.php">
                            <div id="circ">
                                   <img src="images/BlobGuy.png" alt="Shmeareian">
                            </div>
                     </a>

                     Welcome to Boise Flavors home
                     <a href="user_profile.php">
                            <div id="userprofile"> User Profile </div>
                     </a>
              </h1>

       <?php } elseif ($currentPage == "contact") { ?>
              <h1 class='header'>
                     <a href="index.php">
                            <div id="circ">
                                   <img src="images/BlobGuy.png" alt="Shmeareian">
                            </div>
                     </a>
                     Welcome to Boise Flavors contact
              </h1>
       <?php } elseif ($currentPage == "about") {  ?>
              <h1 class='header'> Welcome to Boise Flavors about </h1>
       <?php } ?>



</head>