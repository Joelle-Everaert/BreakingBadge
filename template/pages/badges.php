<h1>BADGES</h1>

<?php
//importer fonction

$badges = getBadges();
while($badge = $badges->fetch()){
    echo '<li>'.$badge['name'] . " - [" .$badge['description']. '] <a href="?p=editBadge&id_badge=' .$badge['id_badge']. '">EDIT</a></li> ';
}

//boucle pour les afficher
?>