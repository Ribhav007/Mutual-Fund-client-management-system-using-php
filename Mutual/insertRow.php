<?php
require('inc/config.php');
require('inc/db.php');
require('inc/navbar.php');

if(isset($_POST['submit'])){
    
$folio=mysqli_real_escape_string($conn,$_POST['folio']);    
$name=mysqli_real_escape_string($conn,$_POST['name']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$pincode=mysqli_real_escape_string($conn,$_POST['pincode']);
$PhNos=mysqli_real_escape_string($conn,$_POST['PhNos']);
$Email=mysqli_real_escape_string($conn,$_POST['Email']);
$Nominee=mysqli_real_escape_string($conn,$_POST['Nominee']);
$pan=mysqli_real_escape_string($conn,$_POST['pan']);
$AMC=mysqli_real_escape_string($conn,$_POST['AMC']);
$type=mysqli_real_escape_string($conn,$_POST['type']);
$Units=mysqli_real_escape_string($conn,$_POST['Units']);
$PurchaseValue=mysqli_real_escape_string($conn,$_POST['PurchaseValue']);
$CurrentValue=mysqli_real_escape_string($conn,$_POST['CurrentValue']);
//var_dump($folio);
$query="INSERT INTO client (folio,name,address,pincode,PhNos,Email,Nominee,pan,AMC,type,Units,PurchaseValue,CurrentValue) VALUES ('$folio','$name','$address','$pincode','$PhNos','$Email','$Nominee','$pan','$AMC','$type','$Units','$PurchaseValue','$CurrentValue')";

 if(mysqli_query($conn,$query)){
     header('Location: '.ROOT_URL.'');   
}
else{
    echo 'Error: '. mysqli_error($conn);
}

}
?>