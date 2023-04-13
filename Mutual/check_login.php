<?php
require('inc/config.php');
require('inc/db.php');
if(isset($_POST['login'])){
    $username=$_POST['email'];
    $password=$_POST['password'];

    $query="Select * from login WHERE login.email='$username'";
    $result=mysqli_query($conn,$query);

    if($row=mysqli_fetch_assoc($result)){
        $db_password=$row["password"];
        if($password==$db_password){
            $_SESSION['loggedin']=true;
            header("location:show.php");
        }
        else{
            header("location:login.php");
        }

    }
    else{
        header("location:login.php");
    }
}
