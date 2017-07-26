<?php
   $connect = mysqli_connect('localhost','root' ,'','fergocargo_schema');
          $_SESSION['connect']  =  $connect;
     if(!$connect){
        die('Could not connect to database'); 
     }

?>

