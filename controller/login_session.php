<?php
include '../connection/connectiondb.php';
$mydb = new model();
$conobj = $mydb->OpenConn();

if (isset($_REQUEST['submit'])) {
    $userName = $_REQUEST['name'];
    $userEmail = $_REQUEST['email'];
    $userPassword = $_REQUEST['password'];
    $result = mysqli_query($conobj, "SELECT * FROM customer WHERE name='$userName' AND email='$userEmail' AND password='$userPassword'");
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
