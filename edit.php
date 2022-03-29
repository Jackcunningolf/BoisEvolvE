<?php session_start() ?>

<form method="post" action="handlers/edit_handler.php" enctype="multipart/form-data">
    <label for="Bio">New bio: </label>
    <textarea name="editted_bio" id="bio_edit" cols="30" rows="10"></textarea>
    <input type="submit" value="Submit changes">
</form>