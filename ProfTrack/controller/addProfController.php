<?php 
    include '../connect.php';

    $profName = $_POST['profName'];
    $profRfid = $_POST['profRfid'];
    $department = $_POST['department'];
    $status = $_POST['status'];
    $response = [];    

    $checkQuery = mysqli_query($conn, "SELECT * FROM professor_tbl WHERE profName = '$profName'");
    $row = mysqli_fetch_assoc($checkQuery);
    if (mysqli_num_rows($checkQuery) > 0) {
        $response['status'] = 'Error';

        $response['message'] = 'Professor Name is taken';
        
    }else {
        $checkrfidQuery = mysqli_query($conn, "SELECT * FROM professor_tbl WHERE profRfid = '$profRfid'");

            if (mysqli_num_rows($checkrfidQuery) > 0) {
                $response['status'] = 'Error';

                $response['message'] = 'Rfid Number is taken';
            }else{
                $sqlInsert = "INSERT INTO professor_tbl (profName, profRfid, department, status) VALUES ('$profName', '$profRfid', '$department', '$status')";
                if (mysqli_query($conn, $sqlInsert)) {
                    $response['status'] = 'Success';

                    $response['message'] = 'Adding Professor Success';
                }
            }
        }

echo json_encode($response);
    ?>