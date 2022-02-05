<?php
    require_once 'header.php';
    echo '<h1 id="header"> Welcome to Boise Flavors contact </h1>';
    echo '</head>';
    $currentPage="contact";
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
    
    $data = file("data.txt");
    $sepdata = explode(" ", $data);
    print_r($sepdata);
    require_once 'footer.php';
    ?>