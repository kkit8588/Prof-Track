  <!-- JQUERY 3.6 -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- BOOTSTRAP JS OFFLINE -->
  <script type="text/javascript" src="./plugins/bootstrap5/bootstrap.min.js"></script>
  <!-- FONT AWESOME OFFLINE -->
  <script type="text/javascript" src="./plugins/fontawesome/all.min.js"></script>

  <script type="text/javascript">
$(document).ready(function () {
   $('#signupID').submit(function (noReload) {
     noReload.preventDefault();

         var signupIDdata = $(this).serialize();

         $.ajax({
             type: 'POST',
             url: './controller/signupController.php',
             data: signupIDdata,
             dataType: 'json',
             success: function (output) {
              $('.alertText').text(output.message);
               if (output.status == 'Success') {
                     $('#alertID').removeClass('alert-danger').addClass('alert-success');
                     setTimeout(function(){
                       window.location.href = 'login.php';
                     }, 1000); 
                 }else{
                   $('#alertID').removeClass('alert-success').addClass('alert-danger');
                   setTimeout(function(){
                       $("#alertID").addClass('d-none');  
                     }, 2000);  
                 }
              $('#alertID').removeClass('d-none');
              
             }
         });                 
     });

   $('#loginID').submit(function (noReload) {
     noReload.preventDefault();

         var loginIDdata = $(this).serialize();

         $.ajax({
             type: 'POST',
             url: './controller/signinController.php',
             data: loginIDdata,
             dataType: 'json',
             success: function (output) {
              $('.alertText').text(output.message);
               if (output.status == 'Success') {
                     $('#alertID').removeClass('alert-danger').addClass('alert-success');
                     setTimeout(function(){
                       window.location.href = './user/dashboard.php';
                     }, 1000); 
                 }else{
                   $('#alertID').removeClass('alert-success').addClass('alert-danger');
                   setTimeout(function(){
                       $("#alertID").addClass('d-none');  
                     }, 2000);  
                 }
              $('#alertID').removeClass('d-none');
              
             }
         });                 
     });
});

  </script>