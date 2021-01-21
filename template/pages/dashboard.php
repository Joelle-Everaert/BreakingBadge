<h1>
 <?php
 require_once('components/functions.php');
 session_start_once();
 
 ?>
 </h1>

 <?php

    if($_SESSION['account_type'] == "ADMIN"){
        include_once('admin_profile.php');
        
//   SI NORMIE
    }else{
        include_once('user_profile.php'); 
              
    }
    
 
 ?>
 </ul>
