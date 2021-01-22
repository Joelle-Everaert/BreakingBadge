<?php
require_once('functions.php');

if(isset($_POST['badge_name'], $_POST['description'], $_POST['shape'], $_POST['color'])){
    createBadge($_POST['badge_name'], $_POST['description'], $_POST['shape'], $_POST['color']);
    header("Location: ../?p=dashboard&Success");
}

exit(); // pour sortir du script php
?>
