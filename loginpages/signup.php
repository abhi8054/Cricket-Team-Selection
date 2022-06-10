
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
        <?php include_once "../partialpages/loginnav.php"; ?>  
        <div class="container">
            <div id="usersignup">
                        <?php
                        if(isset($_GET['flag'])){
                            if($_GET['flag']){
                                echo "<div style='width:100%;background-color:#e63720a4;font: size 1.5rem;padding:1rem;margin-bottom:1rem;color:white'>". $_GET['msg']."</div>";
                            }   
                        }
                    ?>
                    <form action="loginaction.php" method="post">
                        <h1>USER SIGNUP</h1>
                        <div class="subrow">
                            <label>Enter Name : </label>
                            <input type="text" name="signupname" placeholder="Full Name">
                        </div>
                        <div class="subrow">
                            <label>Enter Email : </label>
                            <input type="email" name="signupemail" placeholder="Email Address">
                        </div>
                        <div class="subrow">
                            <label>Enter Mobile No. : </label>
                            <input type="number" name="signupnumber" placeholder="Mobile No.">
                        </div>
                        <div class="subrow">
                            <label>Enter Password : </label>
                            <input type="password" name="signuppass" placeholder="Password">
                        </div>
                        <div class="subrow">
                            <input type="hidden" name="action" value="signup">
                            <input type="submit" value="Sin Up">
                        </div>
                        <div class="subrow">
                            <p>Have an account ? <strong><a href="userlogin.php"> Login </a></strong></p>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <?php include_once "../partialpages/footerfiles.php"; ?>
</body>
</html>