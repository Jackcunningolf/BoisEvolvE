<?php
session_start();

$title = $_POST['title'];
$type = $_POST['promo_type'];
$description = $_POST['promo_description'];
$text = $_POST['promo_text'];

echo $title;
echo $type;
echo $description;
echo $text;
