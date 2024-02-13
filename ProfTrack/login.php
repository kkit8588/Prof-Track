<?php session_start();
    if(isset($_SESSION['Username'])){
        header("Location: ./user");
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LogIn</title>

   <?php include 'header.php' ?>

</head>
<body>
   
<div class="registration vh-100 d-flex flex-column justify-content-center align-items-center">

   <div class="text-center fw-bold text-white">
      <h1 class="display-3" style="font-weight: 900;">ProfTrack</h1>
      <p><b>A Real-Time Web-Based Faculty Presence Monitoring System</b></p>
   </div>
   <form id="loginID" class="rounded-5 bg-white col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4 row row-gap-2 justify-content-center" >
      <div class="row row-gap-3 flex-column align-items-center  p-5">
         <div class="col-12 ">
            <h3 class="register">LogIn</h3>
            <!-- ALERT -->
            <div id="alertID" class="alert alert-danger py-2 d-flex d-none" role="alert">
               <i class="fa-solid fa-circle-exclamation me-1 my-auto"></i>
               <p class="alertText my-auto"></p>
            </div>
         </div>
         <div class="col-12 ">
            <div class="form-floating col-12 ">
              <input type="text" name="Username" class="form-control border-0 " id="floatingInput1" placeholder="Username">
              <label for="floatingInput1" class="d-flex align-items-center column-gap-2 fw-bold"><i class="fa-solid fa-user"></i><b>Username</b></label>

            </div>
         </div>

         <div class="col-12 ">
            <div class="form-floating col-12">
              <input type="password" name="Password" class="form-control border-0 " id="floatingInput2" placeholder="Password">
              <label for="floatingInput2" class="d-flex align-items-center column-gap-2 fw-bold"><i class="fa-solid fa-lock"></i><b>Password</b></label>

            </div>
         </div>

         <div class="col-12 pt-2">
            <input type="submit" name="submit" value="LOGIN" class="btn btn-sm btn-bg rounded-5 px-4 ms-auto">
         </div>
      </div>

      
      
   </form>

</div>
<?php include 'footer.php'; ?>


</body>
</html>