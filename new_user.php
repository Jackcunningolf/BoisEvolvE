<?php 
session_start();
$currentPage = "login";
require_once 'header.php'; 
?>

<div id="new_user">
    <h1>Create new account</h1>

    <form method="post" action="handlers/new_user_handler.php">
        <div class="input_box">
            <label for="first_name"> First name:</label>
            <input type="text" name="first_name" value=<?= $_SESSION['first_name'] ?>>
        </div>
        
        <div class="input_box"> 
            <label for="last_name"> Last name:</label>
            <input type="text" name="last_name" value=<?= $_SESSION['last_name'] ?>>
        </div>
    
        <div class="input_box">
            <label for="nickname"> Nickname : </label>
            <input type="text" name="nickname" value=<?= $_SESSION['username'] ?>>
        </div>
    
        <div class="input_box">
            <label for="email"> Email : </label>
            <input type="text" name="email" value=<?= $_SESSION['email'] ?>>
        </div>
    
        <div class="input_box">
            <label for="password"> Password : </label>
            <input type="text" name="password">
            
        </div>
        Bio :
        <div class="input_box">
            <textarea name="bio" cols="80" rows="10"><?= $_SESSION['bio'] ?></textarea>
            <input type="submit" value="Submit">
        </div>
    </form>

    <?php
    if (count($_SESSION['message']) > 0) {
        echo "<div class='login_msg'>" . $_SESSION['message'] . "</div>";
        if (isset($_SESSION['message'])) {
            unset($_SESSION['message']);
        }
    }
    ?>
</div>
