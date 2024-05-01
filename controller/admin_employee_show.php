<?php
include '../connection/connectiondb.php';
$mydb = new Model();
$conObj = $mydb->OpenConn();
$result = $mydb->admin_employee_show($conObj,"employee");

if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc()){

          echo "<tr><td>".$row["id"]."</td>";
          echo "<td>".$row["name"]."</td>";
          echo "<td>".$row["email"]."</td>";
          echo "<td>".$row["password"]."</td>";
          echo "<td>".$row["user_type"]."</td>";
          echo "<td>".$row["password"]."</td></tr>";  
        }
    }
?>