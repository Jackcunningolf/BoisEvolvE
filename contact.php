<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: index.php');
    exit;
}

$currentPage = "contact";
require_once 'header.php';
include 'table.php';        
?>

<?php

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
?>


<?php
$data = file("data.txt"); ?>
<table>
    <?php for ($i = 0; $i < count($data); $i++) { ?>
        <tr>
            <?php $tokens = explode(",", trim($data[$i]));

            foreach ($tokens as $token) { ?>
                <td> <?= $token ?> </td>
        <?php       }

            echo "</tr>";
        }
        echo "</table>";
        ?>



        <?php
        myTable::make_table("data.txt");
        require_once 'footer.php';
        ?>