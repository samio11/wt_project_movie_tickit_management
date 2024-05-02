<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin_dash.css">
    <title>Employee Dashbord</title>
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
    <h2 class="text_center">Employee dashbord</h2>
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
                <th>Address</th>
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
                    $address = $row['address'];
                    $phone = $row['phone'];
                    echo
                    '<tr>
                    <td>' . $id . '</td>
              <td>' . $name . '</td>
              <td>' . $email . '</td>
              <td>' . $password . '</td>
              <td>' . $role . '</td>
              <td>' . $address . '</td>
              <td>' . $phone . '</td>
              <td><a class= "edit_btn" href="../controller/edit_customer_info.php?id=' . $id . '">Edit</a></td>
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
            <h2>Add New Food Controller</h2>
        </div>
        <div>
            <a class="edit_btn" href="add_new_food_controller.php">Add Customer</a>
        </div>
    </div>
    <div class="s1">
        <div>
            <h2>Search Customer</h2>
        </div>
        <div>
            <!-- <a class="edit_btn" href="add_new_employee.php">Add Employee</a> -->
            <form action="">
                <input type="text" name="input_field" placeholder="Please Enter Name of User" id="">
                <input type="submit" class="btn" name="search_btn" value="Search">
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

    <div class="s1">
        <h2>Edit And Delete Movie</h2>
    </div>
    <table id="show3">
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
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // include '../connection/connectiondb.php';
            $mydb = new model();
            $conObj = $mydb->OpenConn();
            $result = $mydb->show_movie_data($conObj, "movie");




            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["movie_name"] . "</td>";
                    echo "<td>" . $row["movie_rating"] . "</td>";
                    echo "<td>" . $row["movie_ticket_avilable"] . "</td>";
                    echo "<td>" . $row["ticket_price"] . "</td>";
                    echo "<td>" . $row["ticket_sells"] . "</td>";
                    echo '<td><img src="picture/' . $row['movie_poster'] . '" width="150" height="150" alt="image"></td>';
                    echo "<td>" . $row["movie_duration"] . "</td>";
                    echo "<td>" . $row["movie_category"] . "</td>";
                    echo "<td><a class= 'edit_btn' href='../controller/edit_movie_info.php?id=". $row['id']. "'>Edit</a></td>";
                    echo "<td><a class= 'delete_btn' href='../controller/delete_movie.php?id=". $row['id']. "'>Delete</a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>

    </table>


</body>

</html>