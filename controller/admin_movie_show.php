<?php
            include '../connection/connectiondb.php';
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
                    echo "</tr>";
                }
            }
            ?>