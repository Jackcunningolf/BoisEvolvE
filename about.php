<?php
    $currentPage = "about";
    require_once 'header.php';
    // echo '<h1 id="header"> Welcome to Boise Flavors about </h1>';
    // echo '</head>';

    
    require_once 'feeds.php';
    require_once 'nav.php';

    $majors = array();
    $majors[] = "computer science";
    for ($i=1;$i<5;$i++) {
        $majors[] = $i . 8;
    }
    
?>

whaddup about <br>



<?php
    echo "<pre>" . print_r($majors, 1) . "</pre>";

    foreach($majors as $major) {
        echo $major . "</br>";
    }

    echo "</br> Using pop on an array </br>";
    for ($i=0;$i<5;$i++) {
        echo array_pop($majors) . " ";
    }
?>

<form method="post" action="comments.php">
    <div class="input_box">
        <label for="first_name">First name:</label>
        <input type="text" name="first_name">
        <!-- <input type="submit" value="boom"> -->
    </div>
    
    <div class="input_box">
        <label for="last_name">Name:</label>
        <input type="text" name="last_name">
        <input type="submit" value="Submit u man">
    </div>

</form>

         
<?php
    require_once 'footer.php';
?>

