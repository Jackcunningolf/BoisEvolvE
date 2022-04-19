<?php 
session_start();
require_once 'Dao.php';
require_once 'header.php';
$dao = new Dao();
$bio = $dao->getUserBio($_SESSION['username']);
?>

<div id="edit_form">
    <form method="post" action="handlers/edit_handler.php" enctype="multipart/form-data">
        <label for="Bio">New bio: </label>
        <textarea name="editted_bio" id="bio_edit" cols="30" rows="10"><?= $bio['bio'] ?></textarea>
        <input type="submit" value="Submit changes">
    </form>
</div>