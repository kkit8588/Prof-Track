<?php include 'adminSession.php';?>
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

    <div class="LogoutDIV position-absolute" style="right: -24%; top: 20%;">
      <a href="add-professor.php" class="btn btn-sm px-2 btn-prof fw-bold">Add Professor</a>
      <p class="my-1">
        <button class="btn btn-sm px-2 w-100 btn-warning fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#LogoutID" aria-expanded="false" aria-controls="LogoutID">
          Hi, Admin <i class="fa-solid fa-sort-down fs-5 my-auto"></i>
        </button>
      </p>
      <div class="collapse " id="LogoutID">
        <div class="card card-body p-2 w-0 d-flex flex-column"  style="z-index: 2000 !important;">
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

   <div class="bg-white col-9 col-lg-7 col-xl-6 p-4 shadow rounded-4">
    <table id="example" class="table table-bordered table-striped hover" style="width:100%">
        <thead>

            <tr>
                <th>Department</th>
                <th>Professor Name</th>
                <th>Controls</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../connect.php'; 
            $sqlSelect = $conn->query("SELECT * FROM professor_tbl ORDER BY id DESC");
            while($row= $sqlSelect->fetch_assoc()):
            ?>
            <tr>
                <td><?php echo $row['department'] ?></td>
                <td><?php echo $row['profName'] ?></td>
                <td>
                  <div class="d-flex column-gap-1">
                    <a href="edit-professor.php?id=<?php echo $row['id'] ?>" target="_blank" class="btn btn-success btn-sm fw-bold">Edit</a>
                    <button id="deleteID" data-bs-toggle="modal" data-bs-target="#modalID" class="btn btn-danger btn-sm fw-bold"
                     onclick='deleteRow("<?php echo $row['id']; ?>");'>Delete</button>
                  </div>
                </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
     
    </table>
   </div>


   <?php include 'deleteModal.php';?>

</div>
<?php include 'footer.php'; ?>
<script>
   new DataTable('#example', {
    // columnDefs: [
    //     { targets: 0, width: '5%' },
    //     { targets: 2, width: '25%' }
    // ],
    // fixedColumns: true,
    // scrollCollapse: true,
    // scrollX: true,
    // scrollY: 240,
    // "pageLength": 50,
    // "bInfo": false
  scrollY: 240,
  "lengthChange": false,
  "responsive": { breakpoints: [
        { name: 'desktop', width: Infinity },
        { name: 'tablet',  width: 1024 },
        { name: 'phone',   width: 768 }
    ]},
  "columns": [
      {"className": "all"},
    {"className": "min-tablet"}, 
    ],
  bInfo: false,
  paginate: false,
  ordering: false

});

  function deleteRow(deleteValue) {
    var modalInput = document.querySelector('#modalInput');
    modalInput.value = deleteValue
  };

</script>


</body>
</html>