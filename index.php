<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Team Selection</title>
    <?php include_once "partialpages/headerfiles.php"; ?>
</head>
<body>
    <div class="background">
        <?php include_once "partialpages/publicnav.php"; ?>  
        <div class="container">
            <!-- <div id="adminlogin">
                    <?php
                    if(isset($_GET['flag'])){
                        if($_GET['flag']){
                            echo "<div style='width:100%;background-color:#e63720a4;font: size 1.5rem;padding:1rem;margin-bottom:1rem;color:white'>". $_GET['msg']."</div>";
                        }   
                    }
                ?>
                <form action="loginaction.php" method="post">
                    <h1>ADMIN LOGIN</h1>
                    <div class="cancelbutton">
                        <button class="cbtn" onclick="cancelbtn('admin')" type="button"> X </button>
                    </div>
                    <div class="subrow">
                        <label>Enter Username : </label>
                        <input type="text" name="adminuser" placeholder="User Name">
                    </div>
                    <div class="subrow">
                        <label>Enter Password : </label>
                        <input type="password" name="adminpass" placeholder="Password">
                    </div>
                    <div class="subrow">
                        <input type="hidden" name="action" value="adminlogin">
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>  -->
        </div>
    </div>
    <?php include_once "partialpages/footerfiles.php"; ?>
</body>
</html>