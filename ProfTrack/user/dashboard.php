<?php include '../session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Manage Faculty Members</title>

   <?php include 'header.php' ?>

</head>
<body>
   
<div class="registration vh-100 d-flex flex-column justify-content-center align-items-center">

   <div class="position-relative">
    <div class="text-center fw-bold text-white">
      <h1 class="display-3" style="font-weight: 900;">ProfTrack - Professor</h1>
      <p><b>A Real-Time Web-Based Faculty Presence Monitoring System</b></p>
    </div>

    <div class="LogoutDIV position-absolute" style="right: -20%; top: 20%;">
      <p class="my-1">
        <button class="btn btn-sm px-3 btn-warning fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#LogoutID" aria-expanded="false" aria-controls="LogoutID"><?php echo $_SESSION['Username']; ?><i class="fa-solid fa-sort-down fs-5 ms-2 my-auto"></i>
        </button>
      </p>
      <div class="collapse " id="LogoutID">
        <div class="card card-body p-2 w-0 d-flex flex-column">
          <a href="logout.php" role="button"  class="text-decoration-none text-dark py-1 d-flex align-items-center fw-bold">
            <small>Logout</small>
            <i class="fa-solid fa-chevron-right ms-auto" style="font-size: 12px;"></i>
          </a>
        </div>
      </div>
    </div>
   </div>

   <div id="profTable" class="bg-white col-9 col-lg-7 col-xl-6 p-4 shadow rounded-4">
        <!-- INSERT THE PROFTABLE HERE -->
   </div>

        <!-- form for update status -->
    <form id="statusForm"  style="opacity: 0;">
      <input type="text" name="createdDate" value="<?php echo date('Y-m-d')?>">
      <input type="text" name="createdTime" id="clock" value="">

      <input type="text"  id="profRfid" name="profRfid"  autocomplete="off" >
      <input type="submit" name="submit" value="submit" >
    </form>

</div>
<?php include 'footer.php'; ?>
</body>
</html>
    <script>
        function updateClock() {
            var now = new Date();
            var options = { timeZone: 'Asia/Manila', hour12: true, hour: 'numeric', minute: 'numeric' };
            var timeString = now.toLocaleTimeString('en-US', options);
            document.getElementById('clock').value = timeString;
        }

        setInterval(updateClock, 1000); // Update the clock every second
    </script>