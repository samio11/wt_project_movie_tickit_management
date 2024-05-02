<?php
include '../connection/connectiondb.php';

if (null !== ($_POST['submit'] ?? null))
{
    $mydb = new model();
    $conobj= $mydb->OpenConn();
    $food_name = $_REQUEST["food_name"];
    $food_rating = $_REQUEST["food_rating"];
    $food_price = $_REQUEST['food_price'];
    $food_desc = $_REQUEST['food_desc'];
    $food_image = $_FILES['food_image']['name'];
  $result = $mydb->add_food($conobj,"food",$food_name,$food_rating,$food_price,$food_desc,$food_image);
  if($result){
    // echo "successfully inserted";
    move_uploaded_file($_FILES['food_image']['temp_name'],"picture/".$_FILES['food_image']['name']);
    header('location: ../view/food_controller_dashbord.php');
}
else{
    echo "failed to insert";
}
}
?>