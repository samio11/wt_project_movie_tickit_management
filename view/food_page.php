<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../view/css/movie_page.css">
  <title>Movie</title>
</head>
<?php
session_start();
if ($_SESSION['name']) {
  echo "<div class='s1'>";
  echo "<h2>" . "Welcome:- " . $_SESSION['name'] . "</h2>";
  echo "<a class='btn' href='../controller/logout.php'>Logout</a>";
  echo "<a class='btn' href='./index.php'>Home</a>";
  echo "</div>";
} else {
  header('location:./index.php');
}

?>

<body>
  <div class="center">
    <h3>See All The Foods</h3>
  </div>
  <div class="movie_container">
    <?php
    include '../connection/connectiondb.php';
    $mydb = new model();
    $conObj = $mydb->OpenConn();
    $result = $mydb->show_food_data($conObj, "food");




    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

        echo '<div class="movie-card">';
        echo '<img src="picture/' . $row['food_image'] . '" width="300" height="250" alt="image">';
        echo '<div class="movie-details">';
        echo '<h3>' . $row["food_name"] . '</h3>';
        echo '<p><strong>Rating:</strong> ' . $row["food_rating"] . "/5" . '</p>';
        echo '<p><strong>Food Descib:</strong> ' . $row["food_desc"] . '</p>';
        echo '<p><strong>Food Price:</strong> $' . $row["food_price"] . '</p>';
        echo '<div class="center">';
        echo '<a class="btn" href="../controller/food_to_buy.php?id='. $row["id"]. '">Buy Now</a>';
        echo '</div>';
        echo '</div>'; // Close movie-details
        echo '</div>'; // Close movie-card
      }
    }
    ?>
  </div>
</body>

</html>