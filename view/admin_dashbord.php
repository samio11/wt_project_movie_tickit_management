<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin_dash.css">
    <title>Admin dashbord</title>
</head>

<body>
    <h2 class="text_center"> this is admin dashbord</h2>
    <?php
    session_start();
    if ($_SESSION['email']) {
        echo '<div class="s1">';
        echo '<div>';
        echo '<p>'.'Welcome(admin)' . $_SESSION['email'] . '</p>';
        echo '</div>';
        echo '<div>';
        echo "<a class='btn' href='../controller/logout.php'>Logout</a>";
        echo '</div>';
        echo '</div>';
    } else {
        header('location:./admin_login.php');
    }
    ?>

    <h3 class="text_center">Manager Management</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>User Type</th>
                <th>Phone</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            <?php
                include '../connection/connectiondb.php';
                $mydb1 = new model();
                $connobj = $mydb1->openConn();
                $result = $mydb1->showManager($connobj, "manager");
                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $password = $row['password'];
                    $role = $row['user_type'];
                    $phone = $row['phone'];
                    echo
                    '<tr>
                    <td>' . $id . '</td>
              <td>' . $name . '</td>
              <td>' . $email . '</td>
              <td>' . $password . '</td>
              <td>' . $role . '</td>
              <td>' . $phone . '</td>
              <td><a class= "edit_btn" href="edit_user.php?id=' . $id . '">Edit</a></td>
              <td><a class = "delete_btn" href="../controller/delete_manager.php?id=' . $id . '">Delete</a></td>
            </tr>';
                  }
                }
            
            ?>
        </tbody>
    </table>

</body>

</html>