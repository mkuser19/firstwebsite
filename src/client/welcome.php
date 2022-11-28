
<?php session_start();
include('../../src/common/header.php');
print_r( $_SESSION["email"]);
$emailsession= $_SESSION["email"];
?>





  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">My first post</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Readmore</a>
        </div>
        <div class="col-auto d-none d-lg-block">

        <img src="../../src/common/images/blog1.jpg" alt= "blog1 image" width="200" height="250"/>

        </div>
      </div>
    </div>
    </div>


    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="readpost.php" class="stretched-link">Readpost</a>
        </div>
        <div class="col-auto d-none d-lg-block">

        <img src="../../src/common/images/blog1.jpg" alt= "blog2 image" width="200" height="250">

        
        </div>
      </div>
    </div>



  </div>
  


  


  <?php include('../../src/common/footer.php'); ?>
