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
    $movie_name = $_REQUEST["movie_name"];
    $movie_rating = $_REQUEST["movie_rating"];
    $movie_ticket_available = $_REQUEST["movie_ticket_available"];
    $ticket_price = $_REQUEST['ticket_price'];
    $ticket_sell = $_REQUEST['ticket_sell'];
    $movie_image = $_FILES['movie_image']['name'];
    $movie_duration = $_REQUEST['movie_duration'];
    $movie_category = $_REQUEST['movie_category'];
  $result = $mydb->updateMovie($conobj,"movie",$id,$movie_name,$movie_rating,$movie_ticket_available,$ticket_price,$ticket_sell,$movie_image,$movie_duration,$movie_category);
  if($result){
    // echo "successfully inserted";
    move_uploaded_file($_FILES['movie_image']['temp_name'],"picture/".$_FILES['movie_image']['name']);
    header('location: ../view/employee_dashbord.php');
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
    $rows = mysqli_fetch_assoc(mysqli_query($conobj,"SELECT * FROM movie WHERE id = $id"))
     ?>
<body>
    <form method="POST" enctype="multipart/form-data">
        <p>Movie Name</p>
        <input type="text" name="movie_name" value="<?php echo $rows['movie_name']  ?>" required>
        <p>Movie Rating</p>
        <input type="text" name="movie_rating" value="<?php echo $rows['movie_rating']  ?>" required>
        <p>Movie Ticket Available</p>
        <input type="text" name="movie_ticket_available" value="<?php echo $rows['movie_ticket_avilable']  ?>" required>
        <p>Ticket Price</p>
        <input type="text" name="ticket_price"  value="<?php echo $rows['ticket_price'] ?>" required>
        <p>Ticket Sell</p>
        <input type="text" name="ticket_sell"  value="<?php echo $rows['ticket_sells'] ?>" required>
        <p>Movie Image</p>
        <input type="file" name="movie_image" value="<?php echo $rows['movie_poster'] ?>"  required>
        <p>Movie Duration</p>
        <input type="text" name="movie_duration" value="<?php echo $rows['movie_duration'] ?>" required>
        <p>Movie Category</p>
        <input type="text" name="movie_category" value="<?php echo $rows['movie_category'] ?>" required>
        <input type="submit" name="submit" value="Update Movie">
        <!-- <button type="submit" name="save_movie">Add Movie Information</button> -->
        <div class="center">
            <a class="btn" href="../view/employee_dashbord.php">Back Home</a>
        </div>
    </form>

</body>
</html>