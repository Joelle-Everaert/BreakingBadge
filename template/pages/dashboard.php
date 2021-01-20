<h1>
 <?php
 include_once('components/functions.php');
 session_start_once();
 
 ?>
 </h1>

 <?php

    if($_SESSION['account_type'] == "ADMIN"){
        echo "Bonjour " .$_SESSION['firstname']. " !<br/>";
        $displayBadges=displayUserBadge();
        $displayUsers = getUserNormie();
        $getBadges = getBadges();
?>
<!-- ajout bouton pour les badges -->
<button><a href= "?p=addBadge"> ADD BADGE</a></button>  
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
        
        echo "<br/>Bonjour " .$_SESSION['firstname']. " " .$_SESSION['lastname']. "!";
    }
 
 ?>
