<?php include('../../src/common/header.php');

include '../../src/common/database/MyProfile.php'; 


?>
<div>
    Myprofile 
    <form action="./src/submit/submit.php" method="POST">
    <img class="mb-4" src="admin images/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button><hr>
    
  </form>   
</div>
<?php include('../../src/common/footer.php'); ?>