<?php
require('inc/config.php');
require('inc/db.php');
require('inc/navbar.php');

if(isset($_POST['submit'])){
    print_r($_POST);
$sno=mysqli_real_escape_string($conn,$_POST['sno']);
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
$query="UPDATE client SET 
folio='$folio',
name='$name',
address='$address',
pincode='$pincode',
PhNos='$PhNos',
Email='$Email',
Nominee='$Nominee',
pan='$pan',
AMC='$AMC',
type='$type',
Units='$Units',
PurchaseValue='$PurchaseValue',
CurrentValue='$CurrentValue'
  WHERE sno=$sno";

 if(mysqli_query($conn,$query)){
     header('Location: '.ROOT_URL.'show.php');   
}
else{
    echo 'Error: '. mysqli_error($conn);
}

}


?>

