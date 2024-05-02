<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin_dash.css">
    <title>Admin dashbord</title>
</head>

<body>
    <h2 class="text_center"> Food Controller dashbord</h2>
    <?php
    session_start();
    if ($_SESSION['email']) {
        echo '<div class="s1">';
        echo '<div>';
        echo '<p>' . 'Welcome(Food Manager):- ' . $_SESSION['email'] . '</p>';
        echo '</div>';
        echo '<div>';
        echo "<a class='btn' href='../controller/logout.php'>Logout</a>";
        echo '</div>';
        echo '</div>';
    } else {
        header('location:./food_manager_login.php');
    }
    ?>
</body>

</html>