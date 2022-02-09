<?php
    require_once 'header.php';
    include 'table.php';        ?>
    <h1 id="header"> Welcome to Boise Flavors contact </h1>
    </head>
    
<?php
    $currentPage="contact";
    require_once 'feeds.php';
    require_once 'nav.php';
?>
whaddup contact

<div id="contactTable">
    <table>
        <thead>
            <tr>
                <th>Promotions</th>
                <th>Pictures</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>rhodes meetup</td>
                <td>melon 180</td>
            </tr>
            <tr>
                <td>critical mass</td>
                <td>parade downtown</td>
            </tr>
        </tbody>
    </table>
</div>


<?php

    for ($heads = 1; $heads <= 6; $heads++) {
        echo "<h{$heads}>" . "goodbye world" . "</h{$heads}>";
    }
    
    $data = file_get_contents("data.txt");
    $sepdata = explode("\n", trim($data));
    
    echo "<table>";
    foreach ($sepdata as $data) {
        echo "<tr>";
        $tokens = explode(",", trim($data));
        foreach ($tokens as $token) {
            echo "<td>" . $token . "</td> ";
        }
    }
    echo "</table>";

?>



<?php
    myTable::make_table("data.txt");
    require_once 'footer.php';
?>