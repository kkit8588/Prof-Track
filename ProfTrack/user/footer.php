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
  <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.4/js/dataTables.fixedHeader.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/zf/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/cr-1.5.0/kt-2.4.0/r-2.2.2/datatables.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- TABLE DESIGN AND SEARCH END-->

  <script type="text/javascript">

$(document).ready(function () {
    // update status of prof
    $('#statusForm').submit(function (noReload) {
        noReload.preventDefault();
        var statusFormData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: '../controller/updatestatusController.php',
            data: statusFormData,
            success: function () {
                functionName()
                $('#profRfid').val("")

            },
        });
    });


    // get html proftable.php
    function functionName() {
     $.ajax({
            type: 'POST',
            url: '../controller/profTable.php',
            success: function (data) {
                $('#profTable').html(data)
            },
        });
    }
    functionName()
      
});

//focus profRfid input
var profRfid = document.getElementById("profRfid");
    profRfid.focus();


  </script>
