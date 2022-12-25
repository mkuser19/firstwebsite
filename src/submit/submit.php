<?php 
include '../../src/common/database/MyProfile.php'; 
print_r($_POST);

 

if (isset($_POST['updateprofile'])){
    $email=$_POST['email'];
   $myProfile->updateprofile($email,$Firstname);

    echo "inside update profile";
}else{
 $email= $_POST['email'];
  
$password=$_POST['password'];
$myProfile->selectByEmailProfile($email,$password);
}

?>