<?php //include '../../mysqldb.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myfirstwebsite";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "UPDATE users SET pwd= 'Mani95', firstname= 'MOHIT' WHERE id=7";
if($conn->query($sql) === TRUE){
  echo "Record updated successfully";
}else{
  echo "Error updating record: " . $conn->error;
}
?>