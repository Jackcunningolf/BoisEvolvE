<?php
    require_once 'header.php';
    echo '<h1 id="header"> Welcome to Boise Flavors about </h1>';
    echo '</head>';

    $currentPage = "about";
    require_once 'nav.php';

    $majors = array();
    $majors[] = "computer science";
    for ($i=1;$i<5;$i++) {
        $majors[$i] = $i + 8;
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


         
<?php
    require_once 'footer.php';
?>

