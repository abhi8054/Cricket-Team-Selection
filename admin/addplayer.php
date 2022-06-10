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
        <div id="playeradd">
                <?php
                    if(isset($_GET['flag'])){
                        if($_GET['flag']){
                            echo "<div style='width:100%;background-color:#e63720a4;font: size 1.5rem;padding:1rem;margin-bottom:1rem;color:white'>". $_GET['msg']."</div>";
                        }   
                    }
                ?>
                <form action="playeraction.php" method="post">
                    <h1>ADD PLAYER</h1>
                    <div class="subrow">
                        <label>Full Name : </label>
                        <input type="text" name="playername" placeholder="Full Name">
                    </div>
                    <div class="subrow">
                        <label>Player Rating : </label>
                        <input type="text" name="playerrating" placeholder="Player Rating">
                    </div>
                    <div class="subrow">
                        <label>Player Role : </label>
                        <input type="text" name="playerrole" placeholder="Player Role">
                    </div>
                    <div class="subrow">
                        <label>Official Team : </label>
                        <input type="text" name="officialteam" placeholder="Official Team">
                        </div>
                    <div class="subrow">
                        <label>Player Base Price : </label>
                        <input type="text" name="playerbaseprice" placeholder="Base Price">
                    </div>
                    <div class="subrow">
                        <input type="hidden" name="action" value="addplayer">
                        <input type="submit" value="ADD">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>