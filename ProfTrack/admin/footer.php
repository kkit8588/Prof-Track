  <!-- JQUERY 3.6 -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- BOOTSTRAP JS OFFLINE -->
  <script type="text/javascript" src="../plugins/bootstrap5/bootstrap.min.js"></script>
  <!-- FONT AWESOME OFFLINE -->
  <script type="text/javascript" src="../plugins/fontawesome/all.min.js"></script>
   <!-- TABLE DESIGN AND SEARCH START-->
   <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/v/zf/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/cr-1.5.0/kt-2.4.0/r-2.2.2/datatables.min.js"></script>
  <!-- TABLE DESIGN AND SEARCH END-->

<script type="text/javascript">
$(document).ready(function () {

    //EDIT PROFESSOR INFORMATION
    $("#editProf").submit(function (noReload) {
        noReload.preventDefault();

        var editformData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: '../controller/editProfController.php',
            data: editformData,
            dataType: 'json',
            success: function (output) {
                $('.alertText').text(output.message);
                $('#alertID').removeClass('d-none');

                if (output.status == 'Success') {
                     $('#alertID').removeClass('alert-danger, d-none').addClass('alert-success');
                     
                 }else{
                   $('#alertID').removeClass('alert-success').addClass('alert-danger');
                   setTimeout(function(){
                       $("#alertID").addClass('d-none');  
                     }, 2000);  
                 }
            },
        });

        setTimeout(function () {
            $("#alertID").addClass('d-none');
        }, 6000);
    });

    //ADD NEW PROFESSOR
    $("#addProf").submit(function (noReload) {
        noReload.preventDefault();

        var addformData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: '../controller/addProfController.php',
            data: addformData,
            dataType: 'json',
            success: function (response) {
                $('.alertText').text(response.message);
                if (response.status == 'Error') {
                    $('#alertID').removeClass('alert-success d-none').addClass('alert-danger');
                    setTimeout(function () {
                        $("#alertID").addClass('d-none');
                    }, 1500);
                
                 }else if (response.status == 'Success'){
                    $('#alertID').removeClass('alert-danger d-none').addClass('alert-success');
                 }
            },
        });

        setTimeout(function () {
            $("#alertID").addClass('d-none');
        }, 6000);
    });

});

$(document).ready(function () {
    //DELETE FUNCTION
    $('#deleteForm').submit(function (noReload) {
        noReload.preventDefault();

        var deleteFormData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: '../controller/deleteController.php',
            data: deleteFormData,
            success: function () {
              window.location.reload();
            },
        });
    });


    //EDIT USER INFORMATION
    $('#editUser').submit(function (noReload){
        noReload.preventDefault();

        var editUserdata = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: '../controller/updateController.php',
            data: editUserdata,
            dataType: 'json',
            success: function(output){
                $('#alertID').removeClass('d-none');
                $('.alertText').text(output.message);
            }, 
        });
        setTimeout(function(){
            $('#alertID').addClass('d-none');
        }, 1500);
    });

    //ADMIN LOGIN
    $('#adminLogin').submit(function (noRefresh){
        noRefresh.preventDefault()

        var getData = $(this).serialize();
        $.ajax({
            url: '../controller/adminLogin.php',
            type: 'post',
            data: getData,
            dataType: 'json',
            success: function(output){
                if (output.status === 'Error') {
                    alert(output.message);
                }else{
                    window.location.href = 'dashboard.php';
                }

            },
        });
    });

});


//// Prevent RFID AUTO ENTER
var inputElement = document.getElementById('profRfid');

inputElement.addEventListener('keydown', function(event) {
    // Check if the pressed key is Enter (key code 13)
    if (event.keyCode === 13) {
        event.preventDefault();
    }
});




  </script>
