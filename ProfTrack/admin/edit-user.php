<?php include 'adminSession.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit User</title>

   <?php include 'header.php' ?>

</head>
<body>
   
<div class="registration vh-100 d-flex flex-column justify-content-center align-items-center">

   <div class="position-relative">
    <div class="text-center fw-bold text-white">
      <h1 class="display-3" style="font-weight: 900;">ProfTrack - Edit</h1>
      <p><b>A Real-Time Web-Based Faculty Presence Monitoring System</b></p>
    </div>

    <div class="LogoutDIV position-absolute" style="right: -24%; top: 50%;">
      <p class="mb-1">
        <button class="btn btn-sm px-2 btn-warning fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#LogoutID" aria-expanded="false" aria-controls="LogoutID">
          Hi, Admin <i class="fa-solid fa-sort-down fs-5 my-auto"></i>
        </button>
      </p>
      <div class="collapse " id="LogoutID">
        <div class="card card-body p-2 w-0" style="z-index: 2000 !important;">
          <a href="dashboard.php" role="button"  class="text-decoration-none text-dark py-1 d-flex align-items-center fw-bold">
            <small>Dashboard</small>
            <i class="fa-solid fa-chevron-right ms-auto" style="font-size: 12px;"></i>
          </a>
          <hr class="p-0 m-0">
          <a href="logout.php" role="button"  class="text-decoration-none text-dark py-1 d-flex align-items-center fw-bold">
            <small>Logout</small>
            <i class="fa-solid fa-chevron-right ms-auto" style="font-size: 12px;"></i>
          </a>
        </div>
      </div>
    </div>
   </div>

   
   <form id="editUser" class="rounded-5 bg-white col-10 col-sm-7 col-md-6 col-lg-5 col-xl-4 col-xxl-3 row row-gap-2 justify-content-center px-1 py-5" >
      <div class="row row-gap-3 flex-column justify-content-center align-items-center">
         <?php include '../controller/displayEdit.php';?>
         <input type="hidden" name="id" value="<?php if(isset($id)){echo $id; }?>">
         <div class="col-12 ">
            <!-- ALERT -->
            <div id="alertID" class="alert alert-success py-2 my-0 d-flex d-none" role="alert">
               <i class="fa-solid fa-circle-exclamation me-1 my-auto"></i>
               <p class="alertText my-auto"></p>
            </div>
         </div>
         <div class="col-12 ">
            <div class="form-floating col-12 ">
              <input type="text" name="Username" class="form-control border-0 " id="floatingInput1" value="<?php if(isset($Username)){echo $Username; }?>" placeholder="Account Name" autocomplete="off">
              <label for="floatingInput1" class="d-flex align-items-center column-gap-2 fw-bold text-blue"><i class="fa-solid fa-user"></i><b>Account Name</b></label>

            </div>
         </div>

         <div class="col-12 ">
            <div class="form-floating col-12 ">
              <input type="email" name="Email" class="form-control border-0 " id="floatingInput2" value="<?php if(isset($Email)){echo $Email; }?>" placeholder="Account Email"  autocomplete="off">
              <label for="floatingInput2" class="d-flex align-items-center column-gap-2 fw-bold text-blue"><i class="fa-solid fa-envelope"></i><b>Account Email</b></label>

            </div>
         </div>

         <div class="col-12 ">
            <div class="form-floating col-12">
              <input type="password" name="Password" class="form-control border-0 " id="password" value="<?php if(isset($Password)){echo $Password; }?>" placeholder="Password" autocomplete="off">
              <label for="password" class="d-flex align-items-center column-gap-2 fw-bold text-blue"><i class="fa-solid fa-lock"></i><b>Password</b></label>
              
            </div>
         </div>

         <div class="d-flex ">
               <input type="checkbox" id="showPassword"><label class="ms-1 fw-bold" for="showPassword"><small>Show Password</small></label>
            </div>
         
         <div class="col-12 pt-2">
            <input id="inputicon" type="submit" name="submit" value="UPDATE" class="btn btn-sm fw-bold btn-success rounded-3 px-3 ms-auto">
            <a href="users.php" class="btn btn-sm fw-bold btn-primary rounded-3 px-3">BACK</a>
         </div>

      </div>
   </form>
</div>
<?php include 'footer.php'; ?>
<script type="text/javascript">
  $(document).ready(function () {
            const passwordInput = $("#password");
            const showPasswordCheckbox = $("#showPassword");

            showPasswordCheckbox.change(function () {
                if (showPasswordCheckbox.is(":checked")) {
                    // Change input type to "text" to show the password
                    passwordInput.attr("type", "text");
                } else {
                    // Change input type back to "password" to hide the password
                    passwordInput.attr("type", "password");
                }
            });
        });
</script>
</body>
</html>
