<?php 
    session_start();
    include '../connect.php';

    if(!isset($_SESSION['admin_id'])){
        header("Location: login.php");
    }

?>