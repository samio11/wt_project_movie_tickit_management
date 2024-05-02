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
  echo "</div>";
} else {
  header('location:./index.php');
}

?>

<body>
  <div class="center">
    <h3>See All The Movies</h3>
  </div>
  <div class="movie_container">
    <?php
    include '../connection/connectiondb.php';
    $mydb = new model();
    $conObj = $mydb->OpenConn();
    $result = $mydb->show_movie_data($conObj, "movie");




    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

        echo '<div class="movie-card">';
        echo '<img src="picture/' . $row['movie_poster'] . '" width="300" height="250" alt="image">';
        echo '<div class="movie-details">';
        echo '<h3>' . $row["movie_name"] . '</h3>';
        echo '<p><strong>Rating:</strong> ' . $row["movie_rating"] . "/5" . '</p>';
        echo '<p><strong>Duration:</strong> ' . $row["movie_duration"] . '</p>';
        echo '<p><strong>Ticket Price:</strong> $' . $row["ticket_price"] . '</p>';
        echo '<p><strong>Movie Category:</strong>' . $row["movie_category"] . '</p>';
        echo '<div class="center">';
        echo '<a class="btn" href="../controller/movie_to_buy.php?id='. $row["id"]. '">Buy Now</a>';
        echo '</div>';
        echo '</div>'; // Close movie-details
        echo '</div>'; // Close movie-card
      }
    }
    ?>
  </div>
</body>

</html>