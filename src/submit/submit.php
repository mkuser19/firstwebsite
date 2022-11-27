<?php //include '../../mysqldb.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myfirstwebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$email= $_POST['email'];
$password=$_POST['password'];
$check_email = mysqli_query($conn,"SELECT Email FROM users WHERE Email='$email'");
if(mysqli_num_rows($check_email)>0){
    header("location:../../src/client/welcome.php");

}else{
echo "please create new account";}
?>