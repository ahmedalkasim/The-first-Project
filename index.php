<?php
include './inc/dp.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<?php include_once './parts/header.php';?>


    
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto ">
<img src="images/winner.jpg" alt="">
      <h1 class="display-4 fw-normal">Win with Ahmed</h2>
      <p class="lead fw-normal">Remainin on registration</p>
      <h3 id="countDown"></h3>


      </div>

          <div class="container">
          <h3>To enter the competition</h3>
              <ul class="list-group list-group-flush">
              <li class="list-group-item">Lorem ipsum dolor sit amet, consetetur sadips</li>
              <li class="list-group-item">Lorem ipsum dolor sit amet, consetetur sadips</li>
              <li class="list-group-item">Lorem ipsum dolor sit amet, consetetur sadips</li>
              </ul>
          </div>
</div>


<div class="container">
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3   ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      
<form  action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <h3>Please input your data</h3>
  <div class="mb-3">
    <label for="firstname" class="form-label">FirstName</label>
    <input type="text" name="firstName" class="form-control"  id="firstname" value="<?php echo $firstnmame;?>">
    <div  class="form-text-error"> <?php echo $errors['FirstnameError']?></div>
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">LastName</label>
    <input type="text" name="lastName" class="form-control"  id="lastname" value="<?php echo $lastname;  ?>">
    <div  class="form-text-error">  <?php echo $errors['LastnameError']?></div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" name="email" class="form-control"  id="email" value="<?php echo $email; ?>">
    <div  class="form-text-error">  <?php echo $errors['EmailError']?></div>
  </div>
        
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  
</form>
  
</div>
</div>


<div class="loader-con">
    <div id="loader">
      <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>
<!-- Button trigger modal -->
<div class="d-grid gap-2 col-4 mx-auto my-5">
    <button type="button" id ="winner"  type="button" class="btn btn-primary">
      Select Winner
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header"> 
          <h5 class="modal-title" id="modalLabel" >Winner</h5>  
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php  foreach($users as $user):?>
        <h3 class="display-3 text-center modal-title" id="modalLabel"> <?php echo htmlspecialchars($user['firstName']) .' '.htmlspecialchars($user['lastName'])?></h3>
        <?php  endforeach ?>

      </div>
      
    </div>
  </div>
</div>


 <!--
<div id="cards" class ="row mb-5 pb-5">
    <div class="col-sm-6">
        <div class="card my-2 bg-light">
            <div class="card-body">
     <h5 class="card-title"> </h5>
     <p class="card-text"><?php echo htmlspecialchars($user['email']);?> </p>
            </div>
      </div>
  </div>
</div>
      -->

<?php include_once './parts/footer.php';?>
