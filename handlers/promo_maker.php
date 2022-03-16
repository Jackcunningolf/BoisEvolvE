<h1>New Post</h1>
<link rel="stylesheet" href="../styles/phpstyle.css">
<!-- enctype="multipart/form-data" -->
<form method="post" action="promo_handler.php" >
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
        <textarea name="description" cols="30" rows="10"></textarea>
    </div>

    <div class="input_box">
        <label for="promo_text">Promotion</label>
        <textarea name="promo_text" cols="100" rows="30"></textarea>
    </div>

    <div class="input_box">
        <input type="submit" value="Submit post">
    </div>

</form>