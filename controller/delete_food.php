<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Food</title>
</head>
<body>
<?php
  include '../connection/connectiondb.php';
  $mydb2 = new model();
  $connobj = $mydb2->openConn();
  if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $result = $mydb2->delete_food($connobj, "food", $id);
    if ($result) {
      echo "successfully deleted";

      header('location: ../view/food_controller_dashbord.php');
    } else {
      die(mysqli_error($connobj));
    }
  }

  ?>
</body>
</html>