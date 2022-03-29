<?php 
session_start();
require_once '../Dao.php';
$dao = new Dao();

$bio = htmlspecialchars($_POST['editted_bio']);
$nick = $_SESSION['username'];
echo $bio . " " . $nick; 
$dao->editUserBio($nick, $bio);



header('location:../user_profile.php');
exit;
