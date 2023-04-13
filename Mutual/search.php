<?php 
require('inc/config.php');
require('inc/db.php');
require('inc/navbar.php');

//print_r($_POST['fol']);
if(isset($_POST['submit'])){
$fol=$_POST['fol'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$PAN=$_POST['PAN'];

    if($fol!=''){
$query="SELECT * FROM client WHERE client.folio={$fol}";
    }
    else if($name!=''){
        $query="SELECT * FROM client WHERE client.name={$name}";

    }
    else if($phone!=''){
        $query="SELECT * FROM client WHERE client.PhNos={$phone}";

    }
    else if($PAN!=''){
        $query="SELECT * FROM client WHERE client.pan={$PAN}";

    }
    else{
        $query="SELECT * FROM client;";
    }

}
 $result=mysqli_query($conn,$query);
 $posts=mysqli_fetch_all($result,MYSQLI_ASSOC);

 
        
mysqli_free_result($result);
 mysqli_close($conn);
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="add_styles.css">
</head>
<body>
    <h1>Search Results</h1>
<table style="width:100%">
                <tr>
                        <th>SNO.</th>
                        <th>Folio No.</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Pincode</th>
                        <th>PhNos</th>
                        <th>Email</th>
                        <th>Nominee</th>
                        <th>PAN Nos</th>
                        <th>AMC</th>
                        <th>Type</th>
                        <th>Units</th>
                        <th>Purchase Value</th>
                        <th>Current Value</th>
                        <th>Update/delete</th>


                </tr>
                <?php foreach($posts as $post): ?>
                <tr>
                <td><?php echo $post['sno']; ?></td>        
                <td><?php echo $post['folio']; ?></td>
                <td><?php echo $post['name']; ?></td>
                <td><?php echo $post['address']; ?></td>
                <td><?php echo $post['pincode']; ?></td>
                <td><?php echo $post['PhNos']; ?></td>
                <td><?php echo $post['Email']; ?></td>
                <td><?php echo $post['Nominee']; ?></td>
                <td><?php echo $post['pan']; ?></td>
                <td><?php echo $post['AMC']; ?></td>
                <td><?php echo $post['type']; ?></td>
                <td><?php echo $post['Units']; ?></td>
                <td><?php echo $post['PurchaseValue']; ?></td>
                <td><?php echo $post['CurrentValue']; ?></td>
                <td><div>
                        <input type="button" id="update"  value="update">
                 <input type="button" id="delete" value="delete"></div></td>
                </tr>
                <?php endforeach; ?>
        </table>
</body>
</html>