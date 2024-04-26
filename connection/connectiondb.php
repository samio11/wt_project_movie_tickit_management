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
    
}
?>