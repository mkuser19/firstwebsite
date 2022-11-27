<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myfirstwebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function addrecord($Id, $email, $password, $Firstname, $lastname) {
  echo $conn;
  echo $sql = " INSERT INTO 'users' (Id, Email, Pwd, Firstname, lastname) 
                VALUES ('$Id' , '$email','$password','$Firstname','$lastname')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}

//$conn->close();
?>