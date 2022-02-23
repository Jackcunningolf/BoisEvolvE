<?php
require_once 'header.php';
require_once 'promos.php';
?>

<link rel="stylesheet" href="styles/phpStyle.css">
<link rel="stylesheet" href="styles/userStyle.css">

<div id="leftfeed" class="feeds">
    This is the feed on the left side
</div>


<div id="user_bio">
    User bio
</div>

<?php
    for ($i = 0; $i < 8; $i++) {
        $j = $i+1;
        new promo("User post: " . $j);
    }
?>


<a href="new_user.php"><br> Make new user</a>