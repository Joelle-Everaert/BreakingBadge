
<?php

$badges = getBadges();
$displayUsers = getUserNormie() 

?>

<form class="badgeToUser" method="POST" action="components/addBadgeToUser_inc.php">

    <label for="validationCustom02" class="Titleofthelabels">Users</label>
    <select class="custom-select" class="shape" name="user_id">
    <option selected>Chose the user</option>
    
    <?php
    foreach($displayUsers as $user){
        echo '<option value="' .$user['id']. '">'.$user['firstname'] . ' </option>';
    }
    ?>

    </select>
    <label for="validationCustom02" class="Titleofthelabels">Badges</label>
    <select class="custom-select" class="shape" name="badge_id">
    <option selected>Chose the badge</option>
    
    <?php
    
    foreach($badges as $value){
    echo '<option value="' .$value['id_badge']. '">'.$value['name'] . ' </option>';
    }
 ?>
    </select>
    <button class="btnSend btn btn-light" type="submit">Enter</button>
   
</form>    