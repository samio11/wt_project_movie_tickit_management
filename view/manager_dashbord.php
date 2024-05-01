<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin_dash.css">
    <title>Manager Dashbord</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#hide_btn").click(function() {
                // $("#div1").fadeToggle();
                document.getElementById("hide_btn").innerText = "show";
                $(".hide_container").slideToggle("slow");
                //  $("#div3").fadeToggle(3000);
            });
        });
    </script>
</head>

<body>
    <h2 class="text_center"> this is Manager dashbord</h2>
    <?php
    session_start();
    if ($_SESSION['email']) {
        echo '<div class="s1">';
        echo '<div>';
        echo '<p>' . 'Welcome(Manager)' . $_SESSION['email'] . '</p>';
        echo '</div>';
        echo '<div>';
        echo "<a class='btn' href='../controller/logout.php'>Logout</a>";
        echo '</div>';
        echo '</div>';
    } else {
        header('location:./manager_login.php');
    }
    ?>

    <h3 class="text_center">Employee Management</h3>
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
            $result = $mydb1->showEmployee($connobj, "employee");
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
              <td><a class= "edit_btn" href="../controller/edit_employee_info.php?id=' . $id . '">Edit</a></td>
              <td><a class = "delete_btn" href="../controller/delete_employee.php?id=' . $id . '">Delete</a></td>
            </tr>';
                }
            }

            ?>
        </tbody>
    </table>

    <!-- search employee -->
    <div class="s1">
        <div>
            <h2>Search Employee</h2>
        </div>
        <div>
            <form action="">
                <input type="text" class="input_field" name="input_field" placeholder="Please Enter Name of employee" id="">
                <input class="btn" type="submit" name="search_btn" value="Search">
            </form>
        </div>
    </div>
    <div class="s1">
    <button id="hide_btn" class="btn">Hide Field</button>
    </div>
    <table class="hide_container">
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
                $sql = "SELECT * FROM employee WHERE id = '$search' or name = '$search' or email = '$search'";
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

    <div class="s1">
        <div>
            <h2>Add New Employee</h2>
        </div>
        <div>
            <a class="btn" href="./add_new_employee.php">Add Employee</a>
        </div>
    </div>

</body>

</html>