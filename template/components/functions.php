<?php
  include_once('db.php');


  // Similar to "include_once" but for sessions
  // Calls "session_start()" unless it has already been called on the page
  function session_start_once(){
    if(session_status() == PHP_SESSION_NONE){
      return session_start();
    }
  }

  function isAuthenticated(){
    session_start_once();
    if(!empty($_SESSION['user_id'])){
      return true;
    }else{
      return false;
    }
}


  function isAdmin(){
    session_start_once();
    return isAuthenticated() && $_SESSION['account_type'] == 'ADMIN';
  }

  function login($email, $password){
    session_start_once();

    $cursor = createCursor();
    $query = $cursor->prepare('SELECT id, password, firstname, lastname, account_type from users WHERE email=?');
    $query->execute([$email]);
    $results = $query->fetch();
    
    if(!empty($results) AND password_verify($password, $results['password'])){
      $_SESSION['user_id'] = $results['id'];
      $_SESSION['firstname'] = $results['firstname'];
      $_SESSION['lastname'] = $results['lastname'];
      $_SESSION['account_type'] = $results['account_type'];
      $_SESSION['email'] = $email;

      return true;
    }
    return false;
  }

  function logout(){
    session_start_once();
    session_destroy();
  }

  // FONCTIONNE
  function getBadges(){
    $bdd = createCursor();
    $badges = $bdd->query('SELECT id_badge, name, description, shape, color from badges');
    
    return $badges;
  }

  //FONCTIONNE
  function getUsers(){
    $bdd = createCursor();
    $users = $bdd->query('SELECT firstname, lastname, email FROM users');
    return $users;
  }

// AFFICHER LES USERS AVEC ACCOUNT SPECIFIQUE // FONCTIONNE
  function getUserNormie(){
    $bdd = createCursor();
    $userNormie = $bdd->query('SELECT firstname, lastname, email FROM users WHERE account_type = "NORMIE"');
    return $userNormie;
  }


// FONCTION CREER UTILISATEURS + CONNEXION BDD
  function createUser($firstname, $lastname, $email, $password, $account_type){
    $password = password_hash($password, PASSWORD_DEFAULT);
    $bdd=createCursor();
    $req = $bdd->prepare('INSERT INTO users (firstname, lastname, email, password, account_type) VALUES(?, ?, ?, ?, ?)');
    $req->execute([
      $firstname,
      $lastname,
      $email,
      $password,
      $account_type
      ]);
    } 


    // FAIRE EN SORTE DE SELECTIONNER ID_BADGE POUR EDITER // FONCTIONNE
    function createBadge($name, $description, $shape, $color){
      session_start_once();
      $bdd = createCursor();
      $sql="INSERT INTO `badges`(`name`, `description`, `shape`, `color`) VALUES (?, ?, ?, ?)";
      $req = $bdd->prepare($sql);
      $req->execute([
          strip_tags(trim($name)),
          strip_tags(trim($description)),
          strip_tags(trim($shape)),
          strip_tags(trim($color))
      ]);
    
    }
  
    // FAIRE EN SORTE DE SELECTIONNER ID_BADGE POUR EDITER +/-
  function editBadge($badge_id, $name, $description, $shape, $color){
    $bdd = createCursor();
    $req = $bdd->prepare('UPDATE badges SET name = ?, description = ?, shape = ?, color = ? WHERE id_badge = ?');
    $req->execute([
      $name,
      $description,
      $shape,
      $color,
      $badge_id
    ]);
    

  }

  function removeBadge($badge_id){
    $bdd=createCursor();
    $req = $bdd->prepare('DELETE FROM badges WHERE id_badge = ?');
    $req->execute([
      $badge_id,
    ]);
    
  }

  // MONTRER BADGE ET UTILISATEUR // FOCNTIONNE
  function displayUserBadge(){
    $bdd=createCursor();
    $request = $bdd->query('SELECT firstname, GROUP_CONCAT(name separator " - ") AS name FROM user_has_badges
    inner join users on users.id=user_has_badges.fk_id_user
    inner join badges on badges.id_badge=user_has_badges.fk_id_badge
    GROUP BY firstname');

    return $request->fetchAll(PDO::FETCH_ASSOC);
  }



  function grantBadgeToUser($badge_id, $user_id){

  }

  function removeBadgeFromUser($badge_id, $user_id){

  }


  function phpAlerte($msg){
    echo'<script type="text/javascript">alert("'.$msg.'")</script>';
  }
?>