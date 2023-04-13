<?php 
require('inc/config.php');
require('inc/db.php');
require('inc/navbar.php');
$query='SELECT * FROM client;';
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
        <link rel="stylesheet" href="add_styles.css" />
        
</head>
<body>
        

<h1>ALL CLIENTS</h1><br>
<div id="sContainer">
        <h2>Search</h2>
<form method="POST" action="search.php" class="searchForm">
<input type="text" name="fol" id="fol" placeholder="Enter Folio No...">
<input type="text" name="name" id="name" placeholder="Enter Name ...">
<input type="number" name="phone" id="PhNos" placeholder="Enter Phone No...">
<input type="text" name="PAN" id="PAN" placeholder="Enter PAN No..."><br>
<input type="submit" name="submit" id="submit" value="Search">
</form>
</div>
<br><br>
<div id="up"></div>

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
                <td>
                        <input type="button"  class="update" value="update">
                        <form action="recyclebin.php" method="POST">
                        <input type="hidden" name="delete_id"  value="<?php echo $post['sno'];?>"> 
                        <input type="submit" name="delete" value="delete">   
                        </form>
                </td>
                </tr>
                <?php endforeach; ?>
        </table>
         
        <script src="Shows.js" ></script>
</body>
</html>