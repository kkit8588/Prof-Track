<?php include 'adminSession.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Dashboard</title>

   <?php include 'header.php' ?>

</head>
<body>
   
<div class="registration vh-100 d-flex flex-column justify-content-center align-items-center">

   <div class="position-relative">
    <div class="text-center fw-bold text-white">
      <h1 class="display-3" style="font-weight: 900;">ProfTrack - Admin</h1>
      <p><b>A Real-Time Web-Based Faculty Presence Monitoring System</b></p>
    </div>

    <div class="LogoutDIV position-absolute" style="right: -24%; top: 50%;">
      <p class="mb-1">
        <button class="btn btn-sm btn-warning fw-bold px-2" type="button" data-bs-toggle="collapse" data-bs-target="#LogoutID" aria-expanded="false" aria-controls="LogoutID">
          Hi, Admin <i class="fa-solid fa-sort-down fs-5 my-auto"></i>
        </button>
      </p>
      <div class="collapse " id="LogoutID">
        <div class="card card-body p-2 w-0">
          <a href="logout.php" role="button" class="text-decoration-none fw-bold text-dark">Logout</a>
        </div>
      </div>
    </div>
   </div>


   <div class="rounded-5 bg-white col-10 col-sm-7 col-md-6 col-lg-5 col-xl-4 col-xxl-3 row row-gap-2 justify-content-center py-5 h-50 " >
      <div class="row mt-2 row-gap-3 flex-column justify-content-center align-items-center  p-5">
         <div class="col-12 ">
            <div class="col-12 d-flex flex-column row-gap-2">
              <a href="users.php" class="btn btn-bg rounded-5 w-100 py-2">MANAGE USERS</a>
              <a href="professor.php" class="btn btn-bg rounded-5 w-100 py-2">MANAGE FACULTY MEMBERS</a>
            </div>
         </div>
      </div>
   </div>

</div>
<?php include 'footer.php'; ?>


</body>
</html>