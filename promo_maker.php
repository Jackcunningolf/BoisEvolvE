<?php 
    session_start();
    require_once 'header.php';
?>

<div id="new_post">
    <h1>New Post</h1>
    <form method="post" action="handlers/promo_handler.php" enctype="multipart/form-data">
        <div class="input_box">
            <label for="title">Title name:</label>
            <input type="text" name="title">
        </div>
    
        <div class="input_box">
            <label for="promo type">Promotion type:</label>
            <select name="promo_type">
                <option selected="selected">Text</option>
                <option>Text with pictures</option>
            </select>
        </div>
    
        <div class="input_box">
            <label for="promo_description">Description</label>
            <textarea name="promo_description" cols="30" rows="10"></textarea>
        </div>
    
        <div class="input_box">
            <label for="promo_text">Promotion</label>
            <textarea name="promo_text" cols="100" rows="30"></textarea>
        </div>
    
        <div class="input_box">
            <input type="submit" value="Submit post">
        </div>
    </form>
</div>