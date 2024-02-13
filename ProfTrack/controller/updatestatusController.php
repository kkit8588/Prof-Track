<?php
include '../connect.php';

$profRfid = $_POST['profRfid']; 
$createdDate = $_POST['createdDate']; 
$createdTime = $_POST['createdTime']; 
$sql = "SELECT id, status FROM professor_tbl WHERE profRfid = '$profRfid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $card_id = $row['id'];

    if ($row['status'] == 'available') {
        $new_status = 'unavailable'; 
    } elseif ($row['status'] == 'unavailable') {
        $new_status = 'busy'; 
    } else {
        $new_status = 'available'; 
    }

    $update_sql = mysqli_query($conn, "UPDATE professor_tbl SET status = '$new_status', createdDate = '$createdDate', createdTime = '$createdTime' WHERE id = $card_id");
}
    


?>
