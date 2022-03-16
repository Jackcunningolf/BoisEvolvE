<?php 
session_start(); 
session_regenerate_id(true);
?>

<h1>Log in</h1>
<form method="post" action="handlers/login.php">
    <div class="input_box">
        <label for="nickname"> Nickname : </label>
        <input type="text" name="nickname" placeholder="type name">
    </div>

    <div class="input_box">
        <label for="password"> Password  : </label>
        <input type="password" name="password">
        <input type="submit" value="Submit">
    </div>
</form>


New here? <a href="new_user.php">Create new account</a>

<?php
if (count($_SESSION['message']) > 0) {
    echo "<pre>" .  print_r($_SESSION['message'], 1) . "</pre>";

    if (isset($_SESSION['message'])) {
        unset($_SESSION['message']);
    }
}
?>