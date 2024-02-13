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
   <title>Sign Up</title>

   <?php include 'header.php' ?>
   <style>
      .registers.toggle:hover{
         background-color: red !important;
      }
   </style>

</head>
<body class="overflow-hidden">
   
<div class="registration vh-100 d-flex flex-column justify-content-center align-items-center">

   <div class="text-center fw-bold text-white">
      <h1 class="display-3" style="font-weight: 900;">ProfTrack</h1>
      <p><b>A Real-Time Web-Based Faculty Presence Monitoring System</b></p>
   </div>
   <form id="signupID" class="rounded-5 bg-white col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4 row row-gap-2 d-flex flex-column justify-content-center align-items-center needs-validation">
      <div class="row mt-2 row-gap-3 flex-column align-items-center px-5 py-4">
         <div class="col-12 ">
            <h3 class="register">Sign Up</h3>

            <!-- ALERT -->
            <div id="alertID" class="alert alert-danger py-2 d-flex d-none" role="alert">
               <i class="fa-solid fa-circle-exclamation me-1 my-auto"></i>
               <p class="alertText my-auto"></p>
            </div>
         </div>
         <div class="col-12 ">
            <div class="form-floating col-12 ">
              <input type="number" name="studno" class="form-control border-0 " id="floatingInput3" placeholder="Student No" required>
              <label for="floatingInput3" class="d-flex align-items-center column-gap-2 fw-bold"><i class="fa-solid fa-user"></i><b>Student No.</b></label>

            </div>
         </div>
         <div class="col-12 ">
            <div class="form-floating col-12 ">
              <input type="text" name="Username" class="form-control border-0 " id="floatingInput2" placeholder="Username" required>
              <label for="floatingInput2" class="d-flex align-items-center column-gap-2 fw-bold"><i class="fa-solid fa-user"></i><b>Username</b></label>

            </div>
         </div>
         <div class="col-12 ">
            <div class="form-floating col-12 ">
              <input type="email" name="Email" class="form-control border-0 " id="floatingInput1" placeholder="Email" required>
              <label for="floatingInput1" class="d-flex align-items-center column-gap-2 fw-bold"><i class="fa-solid fa-envelope"></i><b>Email</b></label>
            </div>
            <div id="emailHelp" class="form-text alert alert-danger py-1 m-0 mt-1 d-none">Your Email should end with "nu-fairview.edu.ph" or "students.nu-fairview.ph"</div>
         </div>

         <div class="col-12 ">
            <div class="form-floating col-12">
              <input type="password" name="Password" class="form-control border-0 " id="floatingInput3" placeholder="Password" required>
              <label for="floatingInput3" class="d-flex align-items-center column-gap-2 fw-bold"><i class="fa-solid fa-lock"></i><b>Password</b></label>

            </div>
         </div>
         <div>
            <small class="fw-bold">By clicking sign up, you agree to <a href="#termsCondition" data-bs-toggle="modal">ProfTrack’s Terms and Conditions</a></small>
         </div>
         <div class="col-12 pt-2">
            <input type="submit" name="submit" value="SIGN UP" class="btn btn-sm btn-bg registers rounded-5 px-4 ms-auto" disabled>
         </div>
      </div>
      
   </form>

   <!-- Modal -->
   <div class="modal fade" id="termsCondition" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-scrollable modal-lg">
       <div class="modal-content">
         <div class="modal-header d-flex justify-content-center">
           <h1 class="modal-title f3-5 fw-bold" id="staticBackdropLabel" style="color: #0056B3;">ProfTrack Terms and Conditions</h1>
         </div>
         <div class="modal-body">
            <ul>
               <li>Acceptance of Terms and Conditions
            By using the ProfTrack system, users agree to abide by these Terms and Conditions, which govern the use of the system. Users are responsible for regularly reviewing and understanding these terms.
               </li>
               <li>Access Control and Privacy:
            Users acknowledge that access to the ProfTrack system and its data is restricted to NU employees and students only. Unauthorized access or attempts to breach the system's security will result in appropriate actions.
               </li>
               <li>Data Usage and Privacy:
            ProfTrack will collect and process data related to faculty presence using RFID technology. Users' data privacy and security are of utmost importance. NU commits to protecting personal information in accordance with applicable data protection laws and university policies.
               </li>
               <li>Use of Data for Academic Purposes:
            The data collected by ProfTrack may be used for academic and administrative purposes, including but not limited to tracking faculty presence, optimizing faculty schedules, and improving campus operations. Data will be anonymized and used in accordance with the institution's policies.
               </li>
               <li>Disclaimer of Liability:
            NU and ProfTrack developers cannot be held liable for any disruptions, errors, or inaccuracies in the system, nor for any consequences resulting from reliance on the system's data. Users understand that the system's accuracy may vary based on RFID technology performance.
               </li>
            </ul>            
         </div>
         <div class="modal-footer d-flex justify-content-center">
           <button type="button" class="btn btn-primary px-4 rounded-pill fw-bold" data-bs-dismiss="modal">BACK</button>
         </div>
       </div>
     </div>
   </div>

</div>
<?php include 'footer.php'; ?>

<script type="text/javascript">
  $('#floatingInput1').keyup(function(){
    var email = $(this).val();

    //valid email list
    var validEmailOne = "nu-fairview.edu.ph";
    var validEmailTwo = "students.nu-fairview.ph";
    //invalid email list
    var yahoolast = "yahoo.com";
    var gmaillast = "gmail.com";
    var hotmaillast = "hotmail.com";

    if (email.endsWith(validEmailOne) || email.endsWith(validEmailTwo)) {
         $('.registers').prop('disabled', false);
         $('#emailHelp').addClass('d-none');
    }else if (email.endsWith(yahoolast) || email.endsWith(gmaillast) || email.endsWith(hotmaillast)){
         $('#emailHelp').removeClass('d-none');
         $('.registers').prop('disabled', true);
    }else{
         $('#emailHelp').addClass('d-none');
         $('.registers').prop('disabled', true);
    }
});

</script>
</body>
</html>