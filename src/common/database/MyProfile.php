<?php session_start();
include '../../src/common/database/connection.php';

class MyProfile {

  private $connection = null;

  // this function is called everytime this class is instantiated		
  public function __construct($connectiondb){

    try{
        $this->connection = $connectiondb;

    }catch(Exception $e){
        throw new Exception($e->getMessage());   
    }			

}
    /*function addrecord($Id, $email, $password, $Firstname, $lastname) {
         $sql = " INSERT INTO 'users' (Id, Email, Pwd, Firstname, lastname) 
                      VALUES ('$Id' , '$email','$password','$Firstname','$lastname')";
        
        if ($db->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      
      }*/

      /*function deleteProfile(){
        $sql = "DELETE FROM users WHERE id=1";
        if ($conn->query($sql) === TRUE) {
           echo "Record deleted successfully";
        } else {
          echo "Error deleting record: " . $conn->error;
        }
      }*/

      function updateProfile($email,$Firstname){
        $sessionemail=$_SESSION['email'];
        $Firstname=$_SESSION['Firstname'];
      echo $sql = "UPDATE users SET email ='$email',Firstname='$Firstname' WHERE email ='$sessionemail' ";
      echo $result= $this->connection->query( $sql);
      echo $count=$result->num_rows;
      
      if($result){
      if ( $result->num_rows >0) {
      # echo "inside if condition";
     $_SESSION['email']=$email;
      header("location:../../src/client/myprofile.php");  
        } else {
        /*  echo "error";
          die;*/
          $_SESSION['error']="Error updating record: ";
          $_SESSION['email']="";
          header("location:../../index.php"); 
        }
      }
    }

      function selectByEmailProfile($email,$password){
        $sql = "SELECT Email FROM users WHERE email='$email' AND pwd='$password'";
        $check_email =  $this->connection->query( $sql);
        if($check_email->fetch_row()>0){
           $_SESSION["email"] = $email;
            header("location:../../src/client/welcome.php");
        
        }else{
           echo "please create new account";
        }
      }
      function GetEmail($email){
        $sql = "SELECT Email FROM users WHERE email='$email'";
        $check_email =  $this->connection->query( $sql);
        if($check_email->fetch_row()>0){
           return $email;
            
        
        }else{
           echo "please create new account";
        }
      }
}

$myProfile = new MyProfile($connection);

?>