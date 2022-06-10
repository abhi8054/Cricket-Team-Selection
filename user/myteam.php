<?php

use function PHPSTORM_META\map;

    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Team Selection</title>
    <?php include_once "../partialpages/headerfiles.php"; ?>
</head>
<body>
    <div class="background">
    <?php include_once "../partialpages/usernav.php"; ?>
        <div class="container">
            <h1 style="color: white;margin-bottom:1rem">My Team Players</h1>

            <div class="table">
                <table class="ptable">
                    <thead>
                        <tr>
                            <th>S No.</th>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Role</th>
                            <th>Official Team</th>
                            <th>Base Price</th>
                        </tr>
                    </thead>
                    <tbody>
            <?php 
                include_once "../partialpages/connection.php";
                $id = $_SESSION['userid'];
                $count = 0;
                $sql = "SELECT * FROM `userteam` WHERE `user_id` = $id";
                $res = mysqli_query($conn,$sql);
                if(mysqli_num_rows($res) == 1){
                $row1= mysqli_fetch_array($res);
                $pid = explode(",",$row1[1]);
                foreach ($pid as $value) {
                    $sel= "SELECT * FROM `players` WHERE `player_id` = '$value'";
                    $rs = mysqli_query($conn,$sel);
                    if(mysqli_num_rows($rs) == 1){
                    $rss = mysqli_fetch_array($rs);
                    $count++;
                    ?>

                    <tr>
                    <td> <?php echo $count ?></td>
                        <td><?php echo $rss[1] ?></td>
                        <td><?php echo $rss[2] ?></td>
                        <td><?php echo $rss[3] ?></td>
                        <td><?php echo $rss[4] ?></td>
                        <td><?php echo $rss[5] ?></td>
                    </tr>
                    <?php }
                    } 
                }else{
                    echo "<div style='width:100%;background-color:#e63720a4;font: size 1.5rem;padding:1rem;margin:1rem 0;color:white'>You have not made any Team YET</div>";
                }
                    ?>
                    </tbody>
                </table>
        </div>
    </div>
</body>
</html>