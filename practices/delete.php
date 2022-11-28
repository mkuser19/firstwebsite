<?php //include '../../mysqldb.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myfirstwebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "DELETE FROM users WHERE id=1";
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
?>