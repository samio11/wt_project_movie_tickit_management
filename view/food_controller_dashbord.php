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
     <div class="s1">
        <div>
            <h2>Add New Movie</h2>
        </div>
        <div>
            <a class="btn" href="./add_new_food.php">Add Food</a>
        </div>
    </div>

    <div class="s1">
        <h2>Edit And Delete Food</h2>
    </div>
    <table id="show3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Food Name</th>
                <th>Food Rating</th>
                <th>Food Price</th>
                <th>Food Description</th>
                <th>Food Picture</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../connection/connectiondb.php';
            $mydb = new model();
            $conObj = $mydb->OpenConn();
            $result = $mydb->show_food_data($conObj, "food");




            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["food_name"] . "</td>";
                    echo "<td>" . $row["food_rating"] . "</td>";
                    echo "<td>" . $row["food_price"] . "</td>";
                    echo "<td>" . $row["food_desc"] . "</td>";
                    echo '<td><img src="picture/' . $row['food_image'] . '" width="150" height="150" alt="image"></td>';
                    echo "<td><a class= 'edit_btn' href='../controller/edit_food_info.php?id=". $row['id']. "'>Edit</a></td>";
                    echo "<td><a class= 'delete_btn' href='../controller/delete_food.php?id=". $row['id']. "'>Delete</a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>

    </table>

    <!-- ajax work -->
    <div class="s1">
        <div>
            <h2>SEE Movie</h2>
        </div>
        <div>
            <button class="btn" onclick="loadFoodOrder()">See All</button>
        </div>
    </div>
    <table>
        <thead>
        <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Food Name</th>
                <th>Quantity of Food</th>
                <th>Per Food Discount Rate</th>
                <th>Net Price of Food</th>
            </tr>
        </thead>
        <tbody id="txt6">

        </tbody>
    </table>
    <script src="../controller/JS/load_food_order.js"></script>
</body>

</html>