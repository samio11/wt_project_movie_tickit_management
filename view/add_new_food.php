<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/new_form.css">
    <title>New Food</title>
    <?php
      include '../controller/validate_food.php';
    ?>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <p>Food Name</p>
        <input type="text" name="food_name" required>
        <p>Food Rating</p>
        <input type="text" name="food_rating" required>
        <p>Food Price</p>
        <input type="text" name="food_price" required>
        <p>Food Description</p>
        <input type="text" name="food_desc" required>
        <p>Food Image</p>
        <input type="file" name="food_image" required>
        <input type="submit" name="submit" value="Add Food">
        <!-- <button type="submit" name="save_movie">Add Movie Information</button> -->
        <div class="center">
            <a class="btn" href="./food_controller_dashbord.php">Back Home</a>
        </div>
    </form>

</body>

</html>