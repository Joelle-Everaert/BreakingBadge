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
        $displayBadges=displayUserBadge();
        $displayUsers = getUserNormie();
        $getBadges = getBadges();
?>

    <ul>
    <?php
        foreach($displayBadges as $value){
            echo '<li>'.$value['firstname'] . ' has the following badge: ' . $value['name'] . '</li>';
        }
    ?>
    </ul>

    <ul>
    <?php
        foreach($displayUsers as $user){
            echo '<li>'.$user['firstname'] . " " .$user['lastname'] . " with this email: " . $user['email'] . '</li>';
        }
    ?>
    </ul>

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
        echo "<br/>Bonjour " .$_SESSION['firstname']. " " .$_SESSION['lastname']. "!";
    }
 
 ?>
