<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/new_form.css">
    <title>Add Customer</title>
</head>
<?php
include '../controller/add_new_employee_logic.php';
?>

<body>
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
            <a class="common_btn" href="./manager_dashbord.php">Back LogIn</a>
        </div>

    </div>
</body>

</html>