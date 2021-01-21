<h1>
 <?php
 include_once('components/functions.php');
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
  <?php
//   SI NORMIE
    }else{
        include_once('user_profile.php');     
    }
 
 ?>
