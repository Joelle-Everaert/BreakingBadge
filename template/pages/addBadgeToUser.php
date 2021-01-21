
<?php

$badges = getBadges();
$displayUsers = getUserNormie() 
// ERREUR!!!!!
?>

<form class="badgeToUser" method="POST" action="components/addBadgeToUser_inc.php">
<label for="validationCustom02" class="Titleofthelabels">Badges</label>
    <select class="custom-select" class="shape" name="badge_id">
    <option selected>Chose the badge</option>
    <?php
    foreach($badges as $value){
    echo '<option>'.$value['name'] . ' </option>';
    }
    ?>
    </select>
    <label for="validationCustom02" class="Titleofthelabels">Users</label>
    <select class="custom-select" class="shape" name="user_id">
    <option selected>Chose the user</option>
    <?php
    foreach($displayUsers as $user){
        echo '<option>'.$user['firstname'] . " - " .$user['lastname'] .' </option>';
    }
    ?>
        
    </select>
    <button class="btn btn-light" type="submit">Submit form</button>
</form>    