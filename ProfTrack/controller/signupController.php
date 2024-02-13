<?php

include '../connect.php';


$Username = $_POST['Username'];
$Password = md5($_POST['Password']);
$Email = $_POST['Email'];
$studno = $_POST['studno'];

// For validation
$checkQuery = "SELECT * FROM user WHERE Username = '$Username' OR Email = '$Email' OR studno = '$studno' ";
$result = mysqli_query($conn, $checkQuery);

$response = []; // Create an empty array to hold the response data

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if ($row['Username'] === $Username) {
        $response['status'] = 'Error';

        $response['message'] = 'Username is taken';
    }else if($row['studno'] === $studno){
        $response['status'] = 'Error';

        $response['message'] = 'Student Number is taken';
    }else {
        $response['status'] = 'Error';

        $response['message'] = 'Email is taken';
    }
} else {
    // For insert
    $insert = "INSERT INTO user (Username, Password, Email, studno) VALUES ('$Username', '$Password', '$Email', '$studno')";

    if (mysqli_query($conn, $insert)) {
        $response['status'] = 'Success';

        $response['message'] = 'Register Successfully';
    }
}

echo json_encode($response);
?>
