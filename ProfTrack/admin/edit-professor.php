<?php include 'adminSession.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Professors</title>

   <?php include 'header.php' ?>

</head>
<body>
   
<div class="registration vh-100 d-flex flex-column justify-content-center align-items-center">

   <div class="position-relative">
    <div class="text-center fw-bold text-white">
      <h1 class="display-3" style="font-weight: 900;">ProfTrack - Edit Prof</h1>
      <p><b>A Real-Time Web-Based Faculty Presence Monitoring System</b></p>
    </div>

    <div class="LogoutDIV position-absolute" style="right: -24%; top: 20%;">
      <a href="add-professor.php" class="btn btn-sm px-2 btn-prof fw-bold px-1">Add Professor</a>
      <p class="my-1">
        <button class="btn btn-sm px-2 btn-warning w-100 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#LogoutID" aria-expanded="false" aria-controls="LogoutID">
          Hi, Admin <i class="fa-solid fa-sort-down fs-5 my-auto"></i>
        </button>
      </p>
      <div class="collapse " id="LogoutID">
        <div class="card card-body p-2 w-0 d-flex flex-column">
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

   <form id="editProf" class="rounded-5 bg-white col-10 col-sm-7 col-md-6 col-lg-5 col-xl-4 col-xxl-3 row row-gap-2 justify-content-center py-5 " >
      <div class="row row-gap-3 flex-column justify-content-center align-items-center px-4">
          <div class="col-12 ">
            <!-- ALERT -->
            <div id="alertID" class="alert alert-success py-2 d-flex d-none" role="alert">
               <i class="fa-solid fa-circle-exclamation me-1 my-auto"></i>
               <p class="alertText my-auto"></p>
            </div>
          </div>
         <?php include '../controller/displayEdit.php';?>
         <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
         <div class="col-12 ">
            <div class="form-floating col-12 ">
              <input type="text" name="department" class="form-control border-0 " id="department" placeholder="Department" value="<?php if (isset($department)) { echo $department; }?>">
              <label for="department" class="d-flex align-items-center column-gap-2 fw-bold text-blue"><i class="fa-solid fa-user"></i><b>Department</b></label>

            </div>
         </div>
         <div class="col-12 ">
            <div class="form-floating col-12 ">
              <input type="text" name="profName" class="form-control border-0 " id="profName" placeholder="Professor Name" value="<?php if (isset($profName)) { echo $profName; }?>">
              <label for="profName" class="d-flex align-items-center column-gap-2 fw-bold text-blue"><i class="fa-solid fa-user"></i><b>Professor Name</b></label>

            </div>
         </div>

         <div class="col-12 ">
            <div class="form-floating col-12 ">
              <input type="text" name="profRfid" class="form-control border-0 " id="profRfid" placeholder="Professor RFID Card Number" value="<?php if (isset($profRfid)) { echo $profRfid; }?>">
              <label for="profRfid" class="d-flex align-items-center column-gap-2 fw-bold text-blue"><i class="fa-solid fa-hashtag"></i><b>Professor RFID Card Number</b></label>

            </div>
         </div>
         <div class="col-12 pt-2">
            <input id="inputicon" type="submit" name="submit" value="UPDATE" class="btn btn-sm fw-bold btn-success rounded-3 px-3 ms-auto">
            <a href="professor.php" class="btn btn-sm fw-bold btn-primary rounded-3 px-3">BACK</a>
         </div>

      </div>
   </form>

</div>
<?php include 'footer.php'; ?>

</body>
</html>