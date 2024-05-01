<?php
include '../connection/connectiondb.php';

if (null !== ($_POST['submit'] ?? null))
{
    $mydb = new model();
    $conobj= $mydb->OpenConn();
    $movie_name = $_REQUEST["movie_name"];
    $movie_rating = $_REQUEST["movie_rating"];
    $movie_ticket_available = $_REQUEST["movie_ticket_available"];
    $ticket_price = $_REQUEST['ticket_price'];
    $ticket_sell = $_REQUEST['ticket_sell'];
    $movie_image = $_FILES['movie_image']['name'];
    $movie_duration = $_REQUEST['movie_duration'];
    $movie_category = $_REQUEST['movie_category'];
  $result = $mydb->add_movie($conobj,"movie",$movie_name,$movie_rating,$movie_ticket_available,$ticket_price,$ticket_sell,$movie_image,$movie_duration,$movie_category);
  if($result){
    // echo "successfully inserted";
    move_uploaded_file($_FILES['movie_image']['temp_name'],"picture/".$_FILES['movie_image']['name']);
    header('location: ../view/manager_dashbord.php');
}
else{
    echo "failed to insert";
}
}
?>