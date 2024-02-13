<?php 
include '../connect.php';

session_start();

$Username = $_POST['Username'];
$Password = md5($_POST['Password']);

$response = []; // Create an empty array to hold the response data


$select = "SELECT * FROM user WHERE Username = '$Username'";
$result = mysqli_query($conn, $select);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $_SESSION['Username'] = $row['Username'];

    // Check if the Password is correct
    if ($row['Password'] == $Password){

        $response['status'] = 'Success';
        $response['message'] = "Login Successfully";
    }else {
        $response['status'] = 'Error';
        $response['message'] = "Wrong password";
    }
} else {
    // Add error status and message to the response
    $response['status'] = 'Error';
    $response['message'] = 'This Username has no record';
}

// Encode the response as JSON and echo it
echo json_encode($response);
?>
