<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/new_form.css">
    <title>Edit Movie</title>
</head>
<?php
include '../connection/connectiondb.php';

if (null !== ($_POST['submit'] ?? null))
{
    $mydb = new model();
    $conobj= $mydb->OpenConn();
    $id = $_REQUEST['id'];
    $food_name = $_REQUEST["food_name"];
    $food_rating = $_REQUEST["food_rating"];
    $food_price = $_REQUEST['food_price'];
    $food_desc = $_REQUEST['food_desc'];
    $food_image = $_FILES['food_image']['name'];
  $result = $mydb->updateFood($conobj,"food",$id,$food_name,$food_rating,$food_price,$food_desc,$food_image);
  if($result){
    move_uploaded_file($_FILES['movie_image']['temp_name'],"picture/".$_FILES['movie_image']['name']);
    header('location: ../view/food_controller_dashbord.php');
}
else{
    echo "failed to insert";
}
}
?>
<?php
    
     $mydb = new model();
     $conobj= $mydb->OpenConn();
    $id = $_REQUEST['id'];
    $rows = mysqli_fetch_assoc(mysqli_query($conobj,"SELECT * FROM food WHERE id = $id"))
     ?>
<body>
    <form method="POST" enctype="multipart/form-data">
    <p>Food Name</p>
        <input type="text" name="food_name" value="<?php echo $rows['food_name']  ?>" required>
        <p>Food Rating</p>
        <input type="text" name="food_rating" value="<?php echo $rows['food_rating']  ?>"  required>
        <p>Food Price</p>
        <input type="text" name="food_price" value="<?php echo $rows['food_price']  ?>"  required>
        <p>Food Description</p>
        <input type="text" name="food_desc" value="<?php echo $rows['food_desc']  ?>"  required>
        <p>Food Image</p>
        <input type="file" name="food_image" value="<?php echo $rows['food_image']  ?>"  required>
        <input type="submit" name="submit" value="Update Food">
        <!-- <button type="submit" name="save_movie">Add Movie Information</button> -->
        <div class="center">
            <a class="btn" href="./food_controller_dashbord.php">Back Home</a>
        </div>
    </form>

</body>
</html>