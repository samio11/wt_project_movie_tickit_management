<?php
            include '../connection/connectiondb.php';
            $mydb = new model();
            $conObj = $mydb->OpenConn();
            $result = $mydb->showOrderFoods($conObj, "customer_buyed_food");




            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["customer_name"] . "</td>";
                    echo "<td>" . $row["food_name"] . "</td>";
                    echo "<td>" . $row["quantity"] . "</td>";
                    echo "<td>" . $row["total_price_discount"] . "</td>";
                    echo "<td>" . $row["per_food_price"] . "</td>";
                    echo "</tr>";
                }
            }
            ?>