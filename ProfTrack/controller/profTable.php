<style>
    table tbody tr #statusColumn{
        min-width: 40px !important;
        max-width: 40px !important;
    }

</style>
<table id="example" class="table table-bordered table-striped hover" style="width:100%">
        <thead>
            <tr>
                <th>Department</th>
                <th>Professor</th>
                <th id="statusColumn">Status</th>
                <th>Last Tap</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include '../connect.php'; 
            $i=1;
            $sqlSelect = $conn->query("SELECT * FROM professor_tbl");
            while($row= $sqlSelect->fetch_assoc()):
            ?>
            <tr>
                <td><?php echo $row['department']; ?></td>
                <td><?php echo $row['profName']; ?></td>
                <td id="statusColumn">
                  <div class="d-flex column-gap-1">
                    <div class="statusID badge text-bg-success fw-bold text-uppercase" data-id="<?php echo $row['status'] ?>"><?php echo $row['status'] ?></div>
                  </div>
                </td>
                <td>
                    <small>
                        <?php echo $row['createdDate'] . "<br>" . $row['createdTime']; ?>
                    </small>
                </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
</table>
<script type="text/javascript">
new DataTable('#example', {
  "lengthChange": false,
  "responsive": { breakpoints: [
        { name: 'desktop', width: Infinity },
        { name: 'tablet',  width: 1024 },
        { name: 'phone',   width: 768 }
    ]},
  "columns": [
      {"className": "all"},
    {"className": "min-tablet"}, 
    {"className": "min-tablet"}, 
    {"className": "min-tablet"}
    ],
  "searching": true,
  "bInfo": false,
  "paginate": false,
  "ordering": false,
  "scrollY": 240
  
  });

//loop the status background
function applyStatusClasses(element) {
    var dataIdValue = $(element).data('id');
    
        if (dataIdValue == "unavailable") {
            $(element).removeClass('text-bg-success text-bg-warning');
            $(element).addClass('text-bg-danger');
        } else if (dataIdValue == "busy") {
            $(element).removeClass('text-bg-success text-bg-danger');
            $(element).addClass('text-bg-warning');
        } else if (dataIdValue == "unavailable") {
            $(element).removeClass('text-bg-warning text-bg-danger');
            $(element).addClass('text-bg-success');
        }
    }

$('.statusID').each(function() {
    applyStatusClasses(this);
});

</script>