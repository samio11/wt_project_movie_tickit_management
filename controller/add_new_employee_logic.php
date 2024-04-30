<?php
include '../connection/connectiondb.php';
$user_type = "employee";
$name = $email = $password = $phone = $hasErr ="";
$nameErr = $emailErr = $passwordErr = $phoneErr = "";
if(isset($_REQUEST['submit'])){
    if(empty($_REQUEST["name"]))
    {
        $hasErr=1;
        $nameErr= "please enter a valid Name";
    
    }
    else{
        $name= $_REQUEST['name'];
    }
    if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",$_REQUEST["email"]))
    {
        $hasErr=1;
        $emailErr= "please enter a valid email address";
    
    }
    else{
        $email= $_REQUEST['email'];
    }
    if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",$_REQUEST["password"]))
    {
        $hasErr=1;
        $passwordErr= "please enter a valid password";
    
    }
    else{
        $password= $_REQUEST['password'];
    }
    if(!preg_match("/^\+88/",$_REQUEST["phone"]))
    {
        $hasErr=1;
        $phoneErr= "please enter a valid Phone Number";
    
    }
    else{
        $phone= $_REQUEST['phone'];
    }

    if($hasErr === 1)
    {
        echo "please enter all the credentials";
    }
    else{
        $mydb = new model();
        $conobj= $mydb->OpenConn();  //connection string
       $result = $mydb->add_employee($conobj,"employee",$_REQUEST['name'],$_REQUEST['email'],$_REQUEST['password'],$user_type,$_REQUEST['phone']);
       if($result){
           echo "successfully inserted";
           header('location: ../view/manager_dashbord.php');
       }
       else{
           echo "failed to insert";
       }
    }

}
?>