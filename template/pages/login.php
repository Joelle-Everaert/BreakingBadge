<?php

include_once('components/functions.php');

if(!empty($_POST['email'])){
    if(login($_POST['email'], $_POST['password'])){
            header("Location: ?p=dashboard");
    };
}

?>

<form method="POST">
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit" value="enter" name="enter">
</form>