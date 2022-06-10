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
    <?php include_once "../partialpages/adminnav.php"; 
        include_once "../partialpages/connection.php";
        $id = $_POST['p_id'];
        $sql = "SELECT * FROM `players` WHERE `player_id` = '$id'";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($res);
    ?>
        <div class="container">
        <div id="playeradd">
                <form onsubmit="return confirm('Are you sure you want to update ?')" action="playeraction.php" method="post">
                    <h1>UPDATE PLAYER</h1>
                    <div class="subrow">
                        <label>Full Name : </label>
                        <input type="text" name="playername" value=<?php echo $row[1]; ?> placeholder="Full Name">
                    </div>
                    <div class="subrow">
                        <label>Player Rating : </label>
                        <input type="text" name="playerrating" value=<?php echo $row[2]; ?> placeholder="Player Rating">
                    </div>
                    <div class="subrow">
                        <label>Player Role : </label>
                        <input type="text" name="playerrole" value=<?php echo $row[3]; ?> placeholder="Player Role">
                    </div>
                    <div class="subrow">
                        <label>Official Team : </label>
                        <input type="text" name="officialteam" value=<?php echo $row[4]; ?> placeholder="Official Team">
                        </div>
                    <div class="subrow">
                        <label>Player Base Price : </label>
                        <input type="text" name="playerbaseprice" value=<?php echo $row[5]; ?> placeholder="Base Price">
                    </div>
                    <div class="subrow">
                        <input type="hidden" name="p_id" value=<?php echo $id ?>>
                        <input type="hidden" name="action" value="updateplayer">
                        <input type="submit" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>