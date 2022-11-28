<?php
 class DatabaseClass{	
 
  public function dbconnect( $dbhost = "localhost", $dbname = "myfirstwebsite", $username = "root", $password    = ""){

      try{

        $con = new mysqli($dbhost, $username, $password, $dbname);
          if( mysqli_connect_errno() ){
              throw new Exception("Could not connect to database.");   
          }
       return $con;
      }catch(Exception $e){
          throw new Exception($e->getMessage());   
      }			

  }

}
$db = new DatabaseClass();
$connection = $db->dbconnect("localhost", "myfirstwebsite","root","");
return $connection ;
?>