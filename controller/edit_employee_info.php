<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/new_form.css">
    <title>Document</title>
</head>
<?php
include '../connection/connectiondb.php';
$id = $_REQUEST['id'];
if(isset($_REQUEST['submit']))
{
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $user_type = $_REQUEST['user_type'];
    $phone = $_REQUEST['phone'];
    $mydb = new model();
    $conobj= $mydb->OpenConn();
    $result = $mydb->updateEmployee($conobj,"employee",$id,$name,$email,$password,$user_type,$phone);
    if($result){
        echo "successfully updated";
        header('location: ../view/manager_dashbord.php');
    }
    else{
        echo "failed to update";
    }
}

?>

<body>
    <?php
     $mydb = new model();
     $conobj= $mydb->OpenConn();
    $id = $_REQUEST['id'];
    $rows = mysqli_fetch_assoc(mysqli_query($conobj,"SELECT * FROM employee WHERE id = $id"))
     ?>

    <div>
        <form method="POST" action="">
            <p>Name</p>
            <input type="text" name="name" id="name1" value="<?php echo $rows['name']  ?>" required>
            <br>
            
            <p>Email</p>
            <input type="email" name="email" id="email1" value="<?php echo $rows['email']  ?>">
            <br>
           
            <p>user type</p>
            <input type="text" name="user_type" id="user_type1" value="<?php echo $rows['user_type']  ?>">
            <p>Phone Number</p>
            <input type="text" name="phone" id="phone1" value="<?php echo $rows['phone']  ?>">
            <br>
            <p>Password</p>
            <input type="password" name="password" id="password1" value="<?php echo $rows['password']  ?>"> <br>
           
            <div class="center">
                <input type="submit" class="common_btn" value="Update" name="submit">
            </div>
        </form>

        <div class="center">
            <a class="common_btn" href="../view/manager_dashbord.php">Back Home</a>
        </div>

    </div>

   
</body>
    

</html>
