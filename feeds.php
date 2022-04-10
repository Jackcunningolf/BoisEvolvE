<?php
require_once 'Dao.php';
$dao = new Dao();
$users = $dao->getUsers();
?>

<div id="leftfeed" class="feeds">
    What other 
    <?php foreach ($users as $user) {
        echo  "<a href='other_profile.php?name={$user['nickname']}'>" .
                "<div class='feedUser'>" . 
                    $user['nickname'] . 
                "</div>" . 
              "</a>";
    } ?>
</div>

<div id="rightfeed" class="feeds">
    This is the feed on the right side
</div>