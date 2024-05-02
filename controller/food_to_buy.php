<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/new_form.css">
    <title>Food to Buy</title>
</head>

<?php
session_start();
if($_SESSION['name'])
{
    $customerName = $_SESSION['name'];
}
else{
    header("location:../view/login.php");
}
?>


<body>
<?php
include "../connection/connectiondb.php";
     $mydb = new model();
     $conobj= $mydb->OpenConn();
    // $movie_name = $_REQUEST['movie_name'];
    $id = $_REQUEST['id'];
    $rows = mysqli_fetch_assoc(mysqli_query($conobj,"SELECT * FROM food WHERE id=$id"))
     ?>

<?php
// Default values
$ticket_price = intval($rows['food_price']); 
$discounted_price = $ticket_price; 

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve movie quantity from the form
    $movie_quantity = isset($_POST['food_quantity']) ? intval($_POST['food_quantity']) : 0;

    // Calculate discount based on quantity
    if ($movie_quantity >= 3 && $movie_quantity < 5) {
        // Apply 5% discount
        $discount_rate = 0.05;
    } elseif ($movie_quantity >= 5) {
        // Apply 10% discount
        $discount_rate = 0.10;
    } else {
        // No discount if quantity is less than 3
        $discount_rate = 0;
    }

    // Calculate discounted price
    $discounted_price = $ticket_price - ($ticket_price * $discount_rate);
    $mydb = new model();
    $conobj= $mydb->OpenConn();
    $result = $mydb->customer_insert_to_buy_food($conobj,"customer_buyed_food",$customerName,$rows['food_name'],$_POST['food_quantity'],$discounted_price,$rows['food_price']);
    if($result){
        echo "successfully inserted";
        header('location: ../view/food_page.php');
    }
    else{
        echo "failed to insert";
    }
}
?>



 
    <form action="" method="POST">
        <p>Customer Name</p>
        <input type="text" name="customer_name" id="name11" value="<?php echo $customerName  ?>" required>
        <br>

        <p>Movie Name</p>
        <input type="text" name="food_name" id="name12" value="<?php echo $rows['food_name']  ?>">
        <br>
        <p>Default Price</p>
        <input type="number" name="food_price" id="name13" value="<?php echo $rows['food_price']  ?>">
        <br>
        <p>Movie Quantity</p>
        <input type="number" name="food_quantity" id="name14" default=1>
        <br>
        <p>Total Discounted price</p>
        <input type="number" name="movie_name" id="name15" value="<?php echo $discounted_price ?>">
        <br>
        <br>
        <br>
        <input type="submit" name="submit" value="BUY">
        <div class="center">
            <a class="btn" href="../view/food_page.php">Back Home</a>
        </div>

        
    </form>
</body>

</html>