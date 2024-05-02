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
        echo '<p>' . 'Welcome(admin)' . $_SESSION['email'] . '</p>';
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
              <td><a class= "edit_btn" href="../controller/edit_manager_info.php?id=' . $id . '">Edit</a></td>
              <td><a class = "delete_btn" href="../controller/delete_manager.php?id=' . $id . '">Delete</a></td>
            </tr>';
                }
            }

            ?>
        </tbody>
    </table>
    <div class="s1">
        <div>
            <h2>Add New Manager</h2>
        </div>
        <div>
            <a class="btn" href="./add_new_manager.php">Add Manager</a>
        </div>
    </div>
    <div class="s1">
        <div>
            <h2>SEE Employee</h2>
        </div>
        <div>
            <button class="btn" onclick="loadUser()">See All</button>
        </div>
    </div>



    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>User Type</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody id="txt">

        </tbody>
    </table>

    <div class="s1">
        <div>
            <h2>SEE Customer</h2>
        </div>
        <div>
            <button class="btn" onclick="loadCustomer()">See All</button>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>User Type</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody id="txt1">

        </tbody>
    </table>
    <div class="s1">
        <div>
            <h2>SEE Movie</h2>
        </div>
        <div>
            <button class="btn" onclick="loadMovie()">See All</button>
        </div>
    </div>
    <table>
        <thead>
        <tr>
                <th>ID</th>
                <th>Movie Name</th>
                <th>Movie Rating</th>
                <th>Avilable Ticket</th>
                <th>Ticket Price</th>
                <th>Ticket Sells</th>
                <th>Movie Picture</th>
                <th>Movie Duration</th>
                <th>Movie Category</th>
            </tr>
        </thead>
        <tbody id="txt5">

        </tbody>
    </table>

    <script src="../controller/JS/load_admin_data.js"></script>
    <script src="../controller/JS/load_admin_customer_data.js"></script>
    <script src="../controller//JS/load_admin_movie_data.js"></script>
</body>

</html>