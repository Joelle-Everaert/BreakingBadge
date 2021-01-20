<h1>BADGES</h1>

<?php
//importer fonction

$badges = getBadges();
while($badge = $badges->fetch()){
    echo "<pre>";
    print_r($badge);
    echo "</pre>";
}

//boucle pour les afficher
?>