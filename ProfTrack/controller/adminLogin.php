
<?php 
include '../connect.php';

session_start();

$Username = $_POST['Username'];
$Password = $_POST['Password'];

$arrayHolder = [];

$select = "SELECT * FROM admin WHERE username = '$Username'";
$result = mysqli_query($conn, $select);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);

    // Check if the Password is correct
    if ($row['password'] === $Password){
        $_SESSION['admin_id'] = $row['id'];

    }else {
    // Add error status and message to the response
    $arrayHolder['status'] = 'Error';

    $arrayHolder['message'] = 'Your Password is Wrong';
    }
    
}else {
    // Add error status and message to the response
    $arrayHolder['status'] = 'Error';

    $arrayHolder['message'] = 'Your Username is Incorrect';
    }
echo json_encode($arrayHolder);


?>

