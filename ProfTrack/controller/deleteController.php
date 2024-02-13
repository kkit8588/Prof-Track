<?php
include '../connect.php';

// RESET AUTO INCREMENT IN DATABASE
function renumberIds($conn, $table) {
    $querys = mysqli_query($conn, "SELECT * FROM $table");
    $number = 1;
    while ($row = mysqli_fetch_array($querys)) {
        $id = $row['id'];
        $updateQuery = mysqli_query($conn, "UPDATE $table SET id = $number WHERE id = $id");
        $number++;
    }
    $resetQuery = mysqli_query($conn, "ALTER TABLE $table AUTO_INCREMENT = 1");
}


// FUNCTION DELETE
if (isset($_POST['deleteName']) OR isset($_POST['deleteUser'])) {
    $deleteUser = $_POST['deleteUser'];
    $deleteName = $_POST['deleteName'];
    if ($deleteUser) {
        $deleteUserQuery = mysqli_query($conn, "DELETE FROM user WHERE id = $deleteUser");

        if ($deleteUserQuery) {
        renumberIds($conn, 'user');
        } 
    }else if($deleteName){
        $deleteProfQuery = mysqli_query($conn, "DELETE FROM professor_tbl WHERE id = $deleteName");

        if ($deleteProfQuery) {
        renumberIds($conn, 'professor_tbl');
        } 
    }
}

  

?>
