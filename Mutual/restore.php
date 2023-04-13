<?php
require('inc/config.php');
require('inc/db.php');
require('inc/header.php');

if(isset($_POST['restore'])){
    $query=$query="INSERT INTO client SELECT * FROM recyclebin WHERE recyclebin.folio={$_POST['restore_folio']}";
    $result=mysqli_query($conn,$query);
    $query1="DELETE  from recyclebin WHERE recyclebin.folio={$_POST['restore_folio']}";
    $result1=mysqli_query($conn,$query1);
    
    
    
        if(mysqli_query($conn,$query)){
            header('Location: '.ROOT_URL.'recyclebin.php');   
       }
       else{
           echo 'Error: '. mysqli_error($conn);
       }
    }
    
    
    
    $query='SELECT * FROM recyclebin;';
     $result=mysqli_query($conn,$query);
     $posts=mysqli_fetch_all($result,MYSQLI_ASSOC);
    
     
    // mysqli_free_result($result1);       
    mysqli_free_result($result);
     mysqli_close($conn);
            ?>
}