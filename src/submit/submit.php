<?php 
include '../../src/common/database/MyProfile.php'; 
$email= $_POST['email'];
$password=$_POST['password'];
$myProfile->selectByEmailProfile($email);
?>