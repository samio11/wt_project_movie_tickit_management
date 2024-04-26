<?php
include '../connection/connectiondb.php';
$mydb = new model();
$conobj = $mydb->OpenConn();

if (isset($_REQUEST['submit'])) {
    $userName = $_REQUEST['name'];
    $result = mysqli_query($conobj, "SELECT * FROM customer WHERE name='$userName'");
    $data_present_row_number = mysqli_num_rows($result);
    if($data_present_row_number == 1)
    {
       session_start();
       $_SESSION['name'] = $userName;
        header('location:../view/index.php');
    }
    else{
        echo "No Data Matching";
    }
}
