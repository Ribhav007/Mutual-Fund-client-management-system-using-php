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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>mutual fund</title>
    <link rel="stylesheet" href="add_styles.css" />
    <style>
      input{
        width: 200px;
        height: 20px;
      }
      textarea{
        width: 200px;
      }
    </style>
    <!-- <script src="url.js"></script> -->
  </head>
  <body>
    <div class="container1">
      <form
        class="form1"
        action="insertRow.php"
        method="POST"
        enctype="multipart/form-data"
      >
        <label for="folio">Folio No:</label>
        <input name="folio" type="number" id="folio" required />

        <label for="name">name:</label>
        <input name="name" type="text" id="name" required />

        <label for="address">address:</label>
        <textarea name="address" type="text" id="address" required ></textarea>

        <label for="pincode">pincode:</label>
        <input name="pincode" type="number" id="pincode" required />

        <label for="PhNos">PhNos:</label>
        <input name="PhNos" type="text" id="PhNos" required />

        <label for="Email">Email:</label>
        <input name="Email" type="email" id="Email" required />

        <label for="Nominee">Nominee:</label>
        <input name="Nominee" type="text" id="Nominee" required />

        <label for="pan">pan:</label>
        <input name="pan" type="text" id="pan" required />

        <label for="AMC">AMC:</label>
        <input name="AMC" type="text" id="AMC" required />

        <label for="sip">SIP</label>
        <input type="radio" name="type" id="sip" value="sip" />
        <label for="stp">STP</label>
        <input type="radio" name="type" id="stp" value="stp" />
        <label for="swp">SWP</label>
        <input type="radio" name="type" id="swp" value="swp" />
        <label for="lumpsum">lumpsum</label>
        <input type="radio" name="type" id="lumpsum" value="lumpsum" />

        <label for="Units">Units:</label>
        <input name="Units" type="number" id="Units" required />

        <label for="PurchaseValue">PurchaseValue:</label>
        <input name="PurchaseValue" type="number" id="PurchaseValue" required />

        <label for="CurrentValue">CurrentValue:</label>
        <input name="CurrentValue" type="number" id="CurrentValue" required />

        <input type="submit" name="submit" value="submit" required />
        
      </form>
    </div>
    
  </body>
</html>
