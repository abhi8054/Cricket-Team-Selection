<?php
session_start();
$task = $_POST['action'];
switch($task){
    case 'save':
        include_once "../partialpages/connection.php";
        $playerid = $_POST['playerid'];
        $pid = implode(",",$playerid);
        $userid = $_SESSION['userid'];
        $sql1 = "SELECT `user_id` FROM `userteam` WHERE `user_id` = '$userid'";
        $r = mysqli_query($conn,$sql1);
        if(mysqli_num_rows($r) == 1){
            header('location:../user/maketeam.php?flag=1&msg=You Team is Already exist');
        }else{
            $sql = "INSERT INTO `userteam`(`userteam_members`, `user_id`) VALUES ('$pid','$userid')";
            $res = mysqli_query($conn,$sql);
            if($res){
            header('location:../user/maketeam.php');
            }else{
                header('location:../user/maketeam.php?flag=1&msg=Something went Wrong');
            }
        }
        
        break;
    case 'savedata':
        include_once "../partialpages/connection.php";
        $playerid = $_POST['playerid'];
        $pid = implode(",",$playerid);
        $userid = $_SESSION['userid'];
        $sql = "UPDATE `userteam` SET `userteam_members`='$pid' WHERE `user_id` = '$userid'";
        $res = mysqli_query($conn,$sql);
        if($res){
            header('location:../user/customizeteeam.php');
         }else{
             header('location:../user/customizeteeam.php?flag=1&msg=Something went Wrong');
         }
         break;
    case 'getplayer':
        echo "hello";
}

?>