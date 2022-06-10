<?php
session_start();
$task = $_POST['action'];
switch($task){
    case 'addplayer':
        $name = $_POST['playername'];
        $rating = $_POST['playerrating'];
        $role = $_POST['playerrole'];
        $oteam = $_POST['officialteam'];
        $price = $_POST['playerbaseprice'];
        include_once "../partialpages/connection.php";
        $sql = "INSERT INTO `players`(`playername`, `playerrating`, `playerrole`, `officialteam`, `playerbaseprice`) VALUES ('$name','$rating','$role','$oteam','$price')";
        $res = mysqli_query($conn,$sql);
        if($res){
           header('location:../admin/addplayer.php');
        }else{
            header('location:../admin/addplayer.php?flag=1&msg=Add Failed');
        }
        break;

    case 'deleteplayer':
            $id = $_POST['p_id'];
            include_once "../partialpages/connection.php";
            $sql = "DELETE FROM `players` WHERE `player_id` = '$id'";
            $res = mysqli_query($conn,$sql);
            if($res){
                header('location:../admin/viewplayer.php');
            }else{
                header('location:../admin/viewplayer.php?flag=1&msg=Deletion Failed');
            }
            break;
    case 'updateplayer':
        $id = $_POST['p_id'];
        $name = $_POST['playername'];
        $rating = $_POST['playerrating'];
        $role = $_POST['playerrole'];
        $oteam = $_POST['officialteam'];
        $price = $_POST['playerbaseprice'];
        include_once "../partialpages/connection.php";
        $sql = "UPDATE `players` SET `playername`='$name',`playerrating`='$rating',`playerrole`='$role',`officialteam`='$oteam',`playerbaseprice`='$price' WHERE `player_id` = '$id'";
        $res = mysqli_query($conn,$sql);
        if($res){
            header('location:../admin/viewplayer.php');
        }else{
            header('location:../admin/viewplayer.php?flag=1&msg=Update Failed');
        }       
}

?>