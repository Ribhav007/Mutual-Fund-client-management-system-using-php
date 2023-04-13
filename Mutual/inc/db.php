<?php
$servername="localhost";
$username="root";
$password="timepass123";
$DB="mutualfund";
$conn=mysqli_connect($servername,$username,$password,$DB);

if(mysqli_connect_errno()){
    echo 'failed to connect to mysql'.mysqli_connect_errno();
}
?>