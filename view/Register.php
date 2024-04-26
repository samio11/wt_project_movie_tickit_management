<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register.css">
    <title>Register</title>
    <?php
      include '../controller/add_customer.php';
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
                        <input type="text" name="name" id="name1" required>
                        <br>
                        <p>
                            <?php
                                echo $nameErr;
                            ?>
                        </p>
                        <p>Email</p>
                        <input type="email" name="email" id="email1">
                        <br>
                        <?php
                                echo $emailErr;
                            ?>
                        <p>user type</p>
                        <input type="email" name="user_type" id="user_type1" disabled>
                        <p>Phone Number</p>
                        <input type="text" name="phone" id="phone1">
                        <br>
                        <?php
                                echo $phoneErr;
                            ?>
                        <p>Address</p>
                        <input type="text" name="address" id="address1">
                        <br>
                        <?php
                                echo $addressErr;
                            ?>
                        <p>Password</p>
                        <input type="password" name="password" id="password1"> <br>
                        <?php
                                echo $passwordErr;
                            ?>
                        <div class="center">
                            <input type="submit" class="common_btn" value="Register" name="submit">
                        </div>
                    </form>

                    <div class="center">
                            <button onclick="register_login()" class="common_btn">Back LogIn</button>
                        </div>
                  
                </div>
            </div>
            <!-- right Part -->
            <div class="right_part">
                <img class="img1" src="./picture/register.gif" alt="">
            </div>
        </div>
    </div>
    <script src="../controller/JS/work_btn.js"></script>
</body>
</html>