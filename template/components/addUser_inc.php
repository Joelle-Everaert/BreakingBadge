<?php
require_once('functions.php');

if(isset($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'])){
    createUser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password']);
    header("Location: ../?p=dashboard");
}

exit();  //pour sortir du script php
?>

