<?php //include '../../mysqldb.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myfirstwebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$email= $_GET['email'];
$password=$_GET['password'];
$Firstname=$_GET['fname'];
$lastname=$_GET['lname'];
function selectrec($Email,$conn){
 $sql = "SELECT * FROM users WHERE Email = '$Email'";
 $result=$conn->query($sql);
 $totalrec =$result->num_rows;
 return $totalrec;
 //if ($result->num_rows>0){
  //echo "email id already exist";}
}
function addrecord($Id, $Email, $Password, $Firstname, $lastname, $conn){
  $sql = "INSERT INTO users (Id, Email, Pwd, Firstname, lastname) 
          VALUES ('$Id' , '$Email','$Password','$Firstname','$lastname')";
      
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    
    }
}
$totalrecord=selectrec($email,$conn);
if($totalrecord >0) {
  echo "email already exist";
}else{
  addrecord(2, $email, $password, $Firstname, $lastname,$conn);
}

// Sunny Ki - Apin repo - sunny_nov_29
?>