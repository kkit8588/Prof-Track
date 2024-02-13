<?php 
    session_start();
    include '../connect.php';

    if(!isset($_SESSION['Username'])){
        header("Location: ../login.php");
    }

?>