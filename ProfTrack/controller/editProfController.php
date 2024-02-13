<?php
include '../connect.php';
    
        $response = [];
         
        $id = $_POST['id'];
        $profName = $_POST['profName'];
        $profRfid = $_POST['profRfid'];
        $department = $_POST['department'];
    

        $sqlUpdate = mysqli_query($conn, "UPDATE professor_tbl SET profName='$profName', profRfid='$profRfid', department='$department' WHERE id='$id'");
        if ($sqlUpdate) {
            $response['status'] = 'Success';

            $response['message'] = 'Update Professor Success';
        }



echo json_encode($response);
?>
