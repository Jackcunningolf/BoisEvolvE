<?php
    echo "Hello world! <br>";
    $a = 4;
    $b = 3;
    $c = 0;
    echo $a . $b . "<br>";

    for ($i = 1; $i < 20; $i++) {
        $c = $i * $i;
        
        if ($c % $i == $i) {
            echo "square of squares";
        } else {
            echo "(" . $c / $i . ") ";
        }
        echo $c . "<br>";
    }

?>

<h1>This part is actually html</h1>

<?php
    echo "Back " . "to php";
    $myage = 20;
    echo "</br>I am $myage years old";

?>

<div id="list">

    <ul>
        <li>home</li>
        <li>contact</li>
        <li>about</li>
    </ul>
</div>