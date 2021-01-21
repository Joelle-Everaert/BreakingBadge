<h1>
 <?php
 include_once('components/functions.php');
 session_start_once();
 
 ?>
 </h1>

 <?php

    if($_SESSION['account_type'] == "ADMIN"){
       
        echo "Bonjour " .$_SESSION['email']. " !";
    }else{
        
        echo "<br/>Bonjour NORMIE -> " .$_SESSION['email']. " !";
    }
 
 ?>
