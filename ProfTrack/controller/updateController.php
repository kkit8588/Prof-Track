<?php
include '../connect.php';


$id = $_POST['id'];
$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$arrayHolder = [];


	$update_sql = mysqli_query($conn, "UPDATE user SET Username = '$Username', Email = '$Email', Password = '$Password' WHERE id = '$id'");
    
	if ($update_sql) {
		$arrayHolder['message'] = 'success';
	}
echo json_encode ($arrayHolder );

?>

