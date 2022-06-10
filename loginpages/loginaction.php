<?php
session_start();
$task = $_POST['action'];
switch($task){
    case 'adminlogin':
        $user = $_POST['adminuser'];
        $pass = $_POST['adminpass'];
        include_once "../partialpages/connection.php";
        $sql = "SELECT * FROM `admin` WHERE `username` = '$user' AND `password` = '$pass'";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res) == 1){
            $_SESSION['adminname'] = $user; 
            // echo $_SESSION['adminname'];
           header('location:../admin/adminhome.php');
        }else{
            header('location:adminlogin.php?flag=1&msg=Login Failed');
        }
        break;

    case 'userlogin':
            $user = $_POST['useremail'];
            $pass = $_POST['userpass'];
            include_once "../partialpages/connection.php";
            $sql = "SELECT * FROM `user` WHERE `useremail` = '$user' AND `userpassword` = '$pass'";
            $res = mysqli_query($conn,$sql);
            if(mysqli_num_rows($res) == 1){
                $row=mysqli_fetch_array($res);
                $_SESSION['userid'] = $row[0];
                $_SESSION['username'] = $row[4];
               header('location:../user/userhome.php');
            }else{
                header('location:userlogin.php?flag=1&msg=Login Failed');
            }
            break;

        case 'signup':
                $name = $_POST['signupname'];
                $email = $_POST['signupemail'];
                $mobile = $_POST['signupnumber'];
                $pass = $_POST['signuppass'];
                if($name == "" || $email == "" || $mobile == "" || $pass == ""){
                    header('location:signup.php?flag=1&msg=Sign Up Failed');
                }else{
                    include_once "../partialpages/connection.php";
                $sql = "INSERT INTO `user`(`useremail`, `userpassword`, `usermobile`, `username`) VALUES ('$email','$pass','$mobile','$name')";
                $res = mysqli_query($conn,$sql);
                if($res){
                    header('location:userlogin.php');

                }else{
                    header('location:signup.php?flag=1&msg=Sign Up Failed');
                }
                }
                
}

?>