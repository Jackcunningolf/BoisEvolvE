<html>
    <head>
        <link rel="stylesheet" href="phpstyle.css">

     <?php if ($currentPage  == "index") { 
            echo "<h1 id='header'> Welcome to Boise Flavors home </h1>";
         } elseif ($currentPage == "contact") { 
            echo "<h1 id='header'> Welcome to Boise Flavors contact </h1>";
         } elseif($currentPage == "about") {
            echo "<h1 id='header'> Welcome to Boise Flavors about </h1>";
         } 
      ?>
    </head>