<?php
session_start();
require_once 'utils.php'; 
?>

<html>
       <head>
              <title>Boise Flavors</title>
              <link rel="icon" type="image/x-icon" href="images/bruh.png">
              <link rel="stylesheet" href="styles/phpstyle.css">
              <link rel="stylesheet" href="styles/headStyle.css">
              <link href="http://fonts.googleapis.com/css?family=Open+Sans"
rel="stylesheet" type="text/css">
              <script src = "node_modules/jquery/dist/jquery.min.js"></script>
              <script src = "js/fadePromo.js"></script>
              <script src = "js/loadcomment.js"></script>

              <?php 
                     if ($currentPage == "login") {
                            utils::createLoginHeader();
                     } else {
                            if (!isset($_SESSION['username'])) {
                                   header('location: index.php');
                                   exit;
                            }
                            utils::createHomeHeader(); 
                     }
              ?>
       </head>