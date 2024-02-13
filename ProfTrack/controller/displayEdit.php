<?php
  include '../connect.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sqlSelect = $conn->query("SELECT * FROM professor_tbl WHERE id = '$id'");
        $row = ($sqlSelect->fetch_assoc());

        $profName = $row['profName'];
        $profRfid = $row['profRfid'];
        $department = $row['department'];
    }else if (isset($_GET['userid'])) {
        $userid = $_GET['userid'];

        $sqlSelect = $conn->query("SELECT * FROM user WHERE id = '$userid'");
        $row = ($sqlSelect->fetch_assoc());

        $Username = $row['Username'];
        $Email = $row['Email'];
        $Password = $row['Password'];
        $id = $row['id'];
    }

  ?>