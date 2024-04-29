<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Manager</title>
</head>
<body>
<?php
include '../connection/connectiondb.php';
$mydb2 = new model();
$connobj = $mydb2->openConn();
if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];
    $result = $mydb2->deleteManager($connobj, "manager",$id);
    if ($result) {
      echo "successfully deleted";
   
      header('location: ../view/admin_dashbord.php');
    }
    else {
      die(mysqli_error($connobj));
    }
}

?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>