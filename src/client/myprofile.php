<?php include('../../src/common/header.php');

include '../../src/common/database/MyProfile.php'; 
$email=$_SESSION['email'];

$profile=$myProfile->GetEmail($email);
print_r($_SESSION);
?>
<div>
    Myprofile 
    <form action="../../src/submit/submit.php" method="POST">
    <img class="mb-4" src="admin images/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Update Profile</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" value="<?php echo $profile;?>" required>
      <label for="floatingInput">Email address</label>
    </div>
    <br>
    <div>
    <label for="fname"></label>
    <input type="text" class="" name="fname" id="fname" placeholder="firstname" value="" required>
    </div><br>
    
    <button name="updateprofile" class="w-100 btn btn-lg btn-primary" type="submit" value="updateprofile">updateProfile</button><hr>
    
  </form>   
</div>
<?php include('../../src/common/footer.php'); ?>