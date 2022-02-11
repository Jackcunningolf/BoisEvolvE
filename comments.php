<?php
    file_put_contents("data.txt",
        $_POST['first_name'] . "," . $_POST['last_name'] . "\n",
        FILE_APPEND | LOCK_EX);

    if ($currentPage == "index") {
        header('location: about.php');
    } else {
        header('location: index.php');
    }
    
    exit;