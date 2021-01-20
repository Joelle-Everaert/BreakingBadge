<h1>
 <?php
 include_once('components/functions.php');
 session_start_once();
 
 
 ?>
 </h1>

 <?php

    if($_SESSION['account_type'] == "ADMIN"){
        echo "Bonjour " .$_SESSION['firstname']. " !";

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
                echo '<li>'.$user['firstname'] . " " .$user['lastname'] . " " . $user['email'] . '</li>';
            }
        ?>
      </ul>

      <ul>
        <?php
            foreach($getBadges as $badge){
                echo '<li>'.$badge['name'] . " - " .$badge['description']. '</li>';
            }
        ?>
      </ul>
  <?php
    }else if($_SESSION['account_type'] == "NORMIE"){
        echo "<br/>Bonjour NORMIE -> " .$_SESSION['firstname']. " !";

    } else {
        echo "There is a problem with your account type. Try logging in again.";
    }
 
 ?>
