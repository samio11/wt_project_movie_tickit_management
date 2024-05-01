<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/new_form.css">
    <title>New Movie</title>
    <?php
      include '../controller/validate_movie.php';
    ?>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <p>Movie Name</p>
        <input type="text" name="movie_name" required>
        <p>Movie Rating</p>
        <input type="text" name="movie_rating" required>
        <p>Movie Ticket Available</p>
        <input type="text" name="movie_ticket_available" required>
        <p>Ticket Price</p>
        <input type="text" name="ticket_price" required>
        <p>Ticket Sell</p>
        <input type="text" name="ticket_sell" required>
        <p>Movie Image</p>
        <input type="file" name="movie_image" required>
        <p>Movie Duration</p>
        <input type="text" name="movie_duration" required>
        <p>Movie Category</p>
        <input type="text" name="movie_category" required>
        <input type="submit" name="submit" value="Add Movie">
        <!-- <button type="submit" name="save_movie">Add Movie Information</button> -->
        <div class="center">
            <a class="btn" href="./manager_dashbord.php">Back Home</a>
        </div>
    </form>

</body>

</html>