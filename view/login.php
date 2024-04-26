<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
    <?php
     include '../controller/login_session.php';
    ?>
</head>

<body>
    <div class="login_full_body">
        <div class="login_small_part">
            <!-- left part -->
            <div class="left_part">
                <div>
                    <form method="POST" action="">
                        <p>Name</p>
                        <input type="text" name="name" placeholder="please Enter User name" id="name1" required>
                        <p>Email</p>
                        <input type="email" name="email" placeholder="please Enter User email" id="email1" required>
                        <p>Password</p>
                        <input type="password" name="password" placeholder="please Enter password" id="password1" required> <br>
                        <div class="center">
                            <input type="submit" class="common_btn" value="submit" name="submit">
                        </div>
                    </form>
                    <div class="center">
                        <P>Dont Have Any Account?</P> <br>
                    </div>
                    <div class="center">
                    <button onclick="login_to_register()" class="common_btn">Register Now</button>
                    </div>
                </div>
            </div>
            <!-- right Part -->
            <div class="right_part">
                <img class="img1" src="./picture/login.gif" alt="">
            </div>
        </div>
    </div>
    <script src="../controller/JS/work_btn.js"></script>
</body>

</html>