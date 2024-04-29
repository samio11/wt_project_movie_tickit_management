<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Admin</title>
</head>
<?php
include '../controller/admin_login_logic.php';
?>
<body>
    <div class="login_full_body">
        <div class="login_small_part">
            <!-- left part -->
            <div class="left_part">
                <div>
                    <form method="POST" action="">
                        <h2 class="ss1">ADMIN login</h2>
                        <p>Admin Email</p>
                        <input type="email" name="email" placeholder="please Enter Admin email" id="email1" required>
                        <p>Admin Password</p>
                        <input type="password" name="password" placeholder="please Enter password" id="password1" required> <br>
                        <div class="center">
                            <input type="submit" class="common_btn" value="Login" name="submit">
                        </div>
                    </form>
                    <div>
                        <a class="back_a" href="./index.php">Back Home</a>
                    </div>
                </div>
            </div>
            <!-- right Part -->
            <div class="right_part">
                <img class="img1" src="./picture/admin_log.png" alt="">
            </div>
        </div>
    </div>
</body>

</html>