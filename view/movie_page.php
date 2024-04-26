<?php
 session_start();
 if($_SESSION['name'])
 {
   echo $_SESSION['name'];
   echo "<a href='../controller/logout.php'>Logout</a>";
 }
 else{
    header('location:./index.php');
 }

?>