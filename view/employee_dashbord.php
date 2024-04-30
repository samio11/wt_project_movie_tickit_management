<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin_dash.css">
    <title>Document</title>
</head>


<body>
    <h2 class="text_center"> this is Employee dashbord</h2>
    <?php
    session_start();
    if ($_SESSION['email']) {
        echo '<div class="s1">';
        echo '<div>';
        echo '<p>' . 'Welcome(Employee)' . $_SESSION['email'] . '</p>';
        echo '</div>';
        echo '<div>';
        echo "<a class='btn' href='../controller/logout.php'>Logout</a>";
        echo '</div>';
        echo '</div>';
    } else {
        header('location:./employee_login.php');
    }
    ?>

    <h3 class="text_center">Customer Management</h3>
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
            $result = $mydb1->showCustomer($connobj, "customer");
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
              <td><a class = "delete_btn" href="../controller/delete_customer.php?id=' . $id . '">Delete</a></td>
            </tr>';
                }
            }

            ?>
        </tbody>
    </table>
    <div class="s1">
        <div>
            <h2>Add New Customer</h2>
        </div>
        <div>
            <a class="edit_btn" href="add_new_customer.php">Add Customer</a>
        </div>
    </div>
    <div class="s1">
        <div>
            <h2>Search Employee</h2>
        </div>
        <div>
            <!-- <a class="edit_btn" href="add_new_employee.php">Add Employee</a> -->
            <form action="">
                <input type="text" name="input_field" placeholder="Please Enter Name of User" id="">
                <input type="submit" name="search_btn" value="Search">
            </form>
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
        <tbody>
            <?php
            $mydb = new model();
            $conobj = $mydb->OpenConn();
            if (isset($_REQUEST['search_btn'])) {
                $search = $_REQUEST['input_field'];
                $sql = "SELECT * FROM customer WHERE id = '$search' or name = '$search' or email = '$search'";
                $result = mysqli_query($conobj, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    echo '<tbody>
                    <tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>' . $row['password'] . '</td>
                    <td>' . $row['user_type'] . '</td>
                    <td>' . $row['phone'] . '</td>
                    </tr>
                    </tbody>
                    ';
                } else {
                    echo '<tr>
                        <td>No Data Found</td>
                        </tr>';
                }
            }
            ?>

        </tbody>
    </table>



</body>

</html>