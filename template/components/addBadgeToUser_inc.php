<?php
    require_once('functions.php');
    
      
if(isset($_POST['badge_id'], $_POST['user_id'])){
    grantBadgeToUser($_POST['badge_id'], $_POST['user_id']);
        header("Location: ../?p=badges");
    }
    
    exit(); // pour sortir du script php
?>