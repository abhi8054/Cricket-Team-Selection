<?php
    $localhost = "localhost";
    $dbuser = "root";
    $password = null;
    $database = "cricket_team_selection";
    $conn = mysqli_connect($localhost,$dbuser,$password,$database);

    if(!$conn){
        die("Something went wrong".mysqli_connect_errno());
    }
?>