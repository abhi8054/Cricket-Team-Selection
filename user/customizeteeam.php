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
                <form onsubmit="return confirm('Are you sure you want to Save ? ')" action="teamaction.php" method="post">
                <table class="ptable">
                    <thead>
                        <tr>
                            <th>S No.</th>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Role</th>
                            <th>Official Team</th>
                            <th>Base Price</th>
                            <th>Customize</th>
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
                        <td>
                            <label>Remove</label>
                            <input type="checkbox" checked name="playerid[]" value=<?php echo $rss[0] ?>>
                        </td>
                    </tr>
                    <?php } 
                }else{
                    echo "<div style='width:100%;background-color:#e63720a4;font: size 1.5rem;padding:1rem;margin:1rem 0;color:white'>You have not made any Team YET</div>";
                }
                    ?>
                    </tbody>
                </table>
                <div>
                    <input type="button" style="width: 100%;margin-top: 1rem;background-color: green;border-radius: 20px;padding: 0.5rem;color: white;" onclick="getTeam()" value="Add New Player">
                </div>
                <div id="newplayer">
                    
                </div>
                <div>
                    <input type="hidden" name="action" value="savedata">
                    <input type="submit" value="Save Data">
                </div>
            </form>
        </div>
    </div>
    <?php 
        include_once "../partialpages/footerfiles.php";
    ?>
</body>
</html>