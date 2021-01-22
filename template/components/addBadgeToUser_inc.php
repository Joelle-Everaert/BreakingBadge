<?php
    require_once('functions.php');
    
      
if(isset($_POST['user_id'], $_POST['badge_id'])){
    grantBadgeToUser($_POST['user_id'], $_POST['badge_id']);
        header("Location: ../?p=dashboard&godjob");
    }
    
    
    exit(); // pour sortir du script php
?>