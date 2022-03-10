<?php
session_start();

$currentPage = "about";
require_once 'header.php';
require_once 'table.php';
require_once 'feeds.php';
require_once 'nav.php';
require_once 'Dao.php';
require_once 'KLogger.php';
$dao = new Dao();

// require_once 'Dao.php';
// $dao = new Dao();


$majors = array();
$majors[] = "computer science";
for ($i = 1; $i < 5; $i++) {
    $majors[] = $i . 8;
}

?>

whaddup about <br>

<a href="#myfooter">move to bottom of page</a>

<?php
echo "<pre>" . print_r($majors, 1) . "</pre>";

foreach ($majors as $major) {
    echo $major . "</br>";
}

echo "</br> Using pop on an array </br>";
for ($i = 0; $i < 5; $i++) {
    echo array_pop($majors) . " ";
}
?>

<form method="post" action="handlers/comments.php">
    <div class="input_box">
        <label for="first_name">First name:</label>
        <input type="text" name="first_name">
    </div>

    <div class="input_box">
        <label for="last_name">Last name:</label>
        <input type="text" name="last_name">
        <input type="submit" value="Submit name">
    </div>

</form>

<?php
if (count($_SESSION['message']) > 0) {
    echo "<pre>" .  print_r($_SESSION['message'], 1) . "</pre>";

    if (isset($_SESSION['message'])) {
        unset($_SESSION['message']);
    }
}


$db_contents = $dao->getUsers(); ?>

<table>
    <thead>
        <th>First name</th>
        <th>Last Name</th>
        <th>delete</th>
    </thead>

    <?php foreach ($db_contents as $comment) {
        echo "<tr>";
        echo "<td>" . $comment["first_name"] . "</td>";
        echo "<td>" . $comment["last_name"] . "</td>";
        echo "<td><a href='handlers/delete.php?id={$comment['id']}'>x</a></td>";
        echo "</tr>";
    }
    // print_r($db_contents, 1);
    ?>
</table>






<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ab, saepe nulla voluptas incidunt temporibus voluptatibus minus perspiciatis tenetur assumenda ex, dolores totam ducimus doloremque. Dolorem nisi molestiae repudiandae esse.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, porro autem dignissimos blanditiis corrupti beatae omnis excepturi saepe labore laboriosam corporis fugiat unde tempora ullam. Consequuntur aperiam ipsum sint necessitatibus.</p>
<?php
myTable::make_table("data.txt");
require_once 'footer.php';
?>