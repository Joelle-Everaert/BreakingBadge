<h1>
 <?php
 require_once('components/functions.php');
 session_start_once();
 
 ?>
 </h1>

 <?php

    if($_SESSION['account_type'] == "ADMIN"){
        include_once('admin_profile.php');
        echo "Bonjour " .$_SESSION['firstname']. " !<br/>";
        $getBadges = getBadges();
?>

    <ul>
    <?php
        foreach($getBadges as $badge){
            echo '<li>'.$badge['name'] . " - [" .$badge['description']. ']</li>';
        }
    ?>
    </ul>
    <ul>
  <?php
//   SI NORMIE
    }else{
        include_once('user_profile.php'); 
        echo "<br/>Bonjour " .$_SESSION['firstname']. " " .$_SESSION['lastname']. "!";
        $displayYourBadge = displayYourBadge($_SESSION['user_id']);
        
        foreach($displayYourBadge as $value){
            echo '<li>'.$value['name'] . " - [" .$value['description']. ']</li>';
        }

              
          }
    
 
 ?>
 </ul>
