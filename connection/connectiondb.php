<?php
class model{
    function openConn(){
        $conn = new mysqli("localhost","root","","movie_management_project");
        return $conn;
    }
    function add_customer($conn,$table,$name,$email,$user_type,$phone,$address,$password){
        $insertSql = "INSERT INTO $table(name,email,user_type,phone,address,password) VALUES ('$name','$email','$user_type','$phone','$address','$password')";
        $result = $conn->query($insertSql);
        return $result;
      }
    function add_employee($conn,$table,$name,$email,$password,$user_type,$phone){
        $insertSql = "INSERT INTO $table(name,email,password,user_type,phone) VALUES ('$name','$email','$password','$user_type','$phone')";
        $result = $conn->query($insertSql);
        return $result;
      }
    function add_manager($conn,$table,$name,$email,$password,$user_type,$phone){
        $insertSql = "INSERT INTO $table(name,email,password,user_type,phone) VALUES ('$name','$email','$password','$user_type','$phone')";
        $result = $conn->query($insertSql);
        return $result;
      }
  
      function admin_login_process($conn,$table,$email,$password){
        $showQuery = "SELECT * FROM $table WHERE email = '$email' AND password = '$password";
        $result = $conn->query($showQuery);
        return $result; 
      }

      function showManager($conn,$table)
      {
        $showQuery = "SELECT * FROM $table";
        $result = $conn->query($showQuery);
        return $result;   
      }
      function deleteManager($conn,$table,$id)
      {
        $deleteQuery = "DELETE FROM $table WHERE id = '$id'";
        $result = $conn->query($deleteQuery);
        return $result;
      }
      function showEmployee($conn,$table)
      {
        $showQuery = "SELECT * FROM $table";
        $result = $conn->query($showQuery);
        return $result;
      }
       
      function deleteEmployee($conn,$table,$id)
      {
        $deleteQuery = "DELETE FROM $table WHERE id = '$id'";
        $result = $conn->query($deleteQuery);
        return $result;
      }
      function showCustomer($conn,$table)
      {
        $showQuery = "SELECT * FROM $table";
        $result = $conn->query($showQuery);
        return $result;
      }
       
      function deleteCustomer($conn,$table,$id)
      {
        $deleteQuery = "DELETE FROM $table WHERE id = '$id'";
        $result = $conn->query($deleteQuery);
        return $result;
      }

      function updateCustomer($conn,$table,$id,$name,$email,$password,$user_type,$address,$phone){
        $updateSql = "UPDATE $table SET name='$name',email='$email',password='$password',user_type='$user_type',address='$address',phone='$phone' WHERE id=$id";
        $result = $conn->query($updateSql);
        return $result;
      }
      function updateEmployee($conn,$table,$id,$name,$email,$password,$user_type,$phone){
        $updateSql = "UPDATE $table SET name='$name',email='$email',password='$password',user_type='$user_type',phone='$phone' WHERE id=$id";
        $result = $conn->query($updateSql);
        return $result;
      }
      function updateManager($conn,$table,$id,$name,$email,$password,$user_type,$phone){
        $updateSql = "UPDATE $table SET name='$name',email='$email',password='$password',user_type='$user_type',phone='$phone' WHERE id=$id";
        $result = $conn->query($updateSql);
        return $result;
      }

      function admin_employee_show($conn,$table)
    {
        $sql = "SELECT * from $table";
        return $conn->query($sql);
    }

    function admin_customer_show($conn,$table)
    {
      $sql = "SELECT * from $table";
      return $conn->query($sql);
    }
   function add_movie($conn,$table,$movie_name,$movie_rating,$movie_ticket_avilable,$ticket_price,$ticket_sells,$movie_poster,$movie_duration,$movie_category){
      $insertSql = "INSERT INTO $table(movie_name,movie_rating,movie_ticket_avilable,ticket_price,ticket_sells,movie_poster,movie_duration,movie_category) VALUES ('$movie_name','$movie_rating','$movie_ticket_avilable','$ticket_price','$ticket_sells','$movie_poster','$movie_duration','$movie_category')";
      $result = $conn->query($insertSql);
      return $result;
   }
   function show_movie_data($conn,$table){
    $sql = "SELECT * from $table";
    return $conn->query($sql);
   }
   function delete_movie($conn,$table,$id)
   {
     $deleteQuery = "DELETE FROM $table WHERE id = '$id'";
     $result = $conn->query($deleteQuery);
     return $result;
   }
   function updateMovie($conn,$table,$id,$movie_name,$movie_rating,$movie_ticket_avilable,$ticket_price,$ticket_sells,$movie_poster,$movie_duration,$movie_category){
    $updateSql = "UPDATE $table SET movie_name='$movie_name',movie_rating='$movie_rating',movie_ticket_avilable='$movie_ticket_avilable',ticket_price='$ticket_price',ticket_sells='$ticket_sells',movie_poster='$movie_poster',movie_duration='$movie_duration',movie_category='$movie_category' WHERE id=$id";
    $result = $conn->query($updateSql);
    return $result;
   }
  
    
}
?>