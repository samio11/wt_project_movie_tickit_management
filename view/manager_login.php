<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Manager</title>
</head>

<body>
    <div class="login_full_body">
        <div class="login_small_part">
            <!-- left part -->
            <div class="left_part">
                <div>
                    <form method="POST" action="">
                        <h2 class="ss1">Manager login</h2>
                        <p>Manager Email</p>
                        <input type="email" name="email" placeholder="please Enter Manager email" id="email1" required>
                        <p>Manager Password</p>
                        <input type="password" name="password" placeholder="please Enter password" id="password1" required> <br>
                        <div class="center">
                            <input type="submit" class="common_btn" value="submit" name="submit">
                        </div>
                    </form>
                    <div>
                        <a class="back_a" href="./index.php">Back Home</a>
                    </div>
                </div>
            </div>
            <!-- right Part -->
            <div class="right_part">
                <img class="img1" src="./picture/manager.gif" alt="">
            </div>
        </div>
    </div>
</body>

</html>