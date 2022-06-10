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
    <?php include_once "../partialpages/adminnav.php"; ?>
        <div class="container">
            <h1 style="color: white;margin-bottom:1rem">Player Details</h1>
            <div class="table">
                <form onsubmit="return confirm('Are you sure you want to delete ? ')" action="playeraction.php" method="post">
                <table class="ptable">
                    <thead>
                        <tr>
                            <th>S No.</th>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Role</th>
                            <th>Official Team</th>
                            <th>Base Price</th>
                            <th colspan="2">Controls</th>
                        </tr>
                    </thead>
                    <tbody>

            <?php 
                include_once "../partialpages/connection.php";
                $sql = "SELECT * FROM `players`";
                $count = 0;
                $res = mysqli_query($conn,$sql);
                if(mysqli_num_rows($res) > 0 ){
                    while($row = mysqli_fetch_array($res)){
                        $count++;
                      ?>
                    <tr>
                        <td> <?php echo $count ?></td>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[2] ?></td>
                        <td><?php echo $row[3] ?></td>
                        <td><?php echo $row[4] ?></td>
                        <td><?php echo $row[5] ?></td>
                        <td>
                            <form onsubmit="return confirm('Are you sure you want to delete ? ')" action="playeraction.php" method="post">
                                <input type="hidden" name="action" value="deleteplayer">
                                <input type="hidden" name="p_id" value=<?php echo $row[0] ?>>
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                        <td>
                            <form action="updateplayer.php" method="post">
                                <input type="hidden" name="p_id" value=<?php echo $row[0] ?>>
                                <input type="submit" value="Update">
                            </form> 
                        </td>
                    </tr>
                    <?php
                    }
                }else{
                    echo "<div style='width:100%;background-color:#e63720a4;font: size 1.5rem;padding:1rem;margin:1rem 0;color:white'>There is no Player Available</div>";
                }
                ?>
                    </tbody>
                </table>
        </div>
    </div>
</body>
</html>