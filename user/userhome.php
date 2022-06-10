<?php 
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
            <div>
                <p class="welcomep">Welcome <span ><?php echo $_SESSION['username'] ?></span> <br>
                To User Page...</p>
            </div>
        </div>
    </div>
</body>
</html>