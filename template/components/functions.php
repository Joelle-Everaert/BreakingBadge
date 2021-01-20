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
    $query = $cursor->prepare('SELECT id, password, firstname, account_type from users WHERE email=?');
    $query->execute([$email]);
    $results = $query->fetch();
    
    if(!empty($results) AND password_verify($password, $results['password'])){
      $_SESSION['user_id'] = $results['id'];
      // $_SESSION['firstname'] = $results['firstanme'];
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

  function getBadges(){
    $bdd = createCursor();
    $badges = $bdd->query('SELECT name, description, shape, color from badges');
    
    return $badges;
  }

  function getUsers(){
    $bdd = createCursor();
    $users = $bdd->query('SELECT firstname, lastname, email FROM users');
    return $users;
  }

// AFFICHER LES USERS AVEC ACCOUNT SPECIFIQUE
  function getUserNormie(){
    $bdd = createCursor();
    $userNormie = $bdd->query('SELECT firstname, lastname, email FROM users WHERE account_type = "NORMIE"');
    return $userNormie;
  }


// FONCTION CREER UTILISATEURS + CONNEXION BDD
  // function createUser($firstname, $lastname, $email, $password){
  //   $password = password_hash($password, PASSWORD_DEFAULT);
  //   $bdd=createCursor();
  //   try {
  //     $req = $bdd->prepare('INSERT INTO users(firstname, lastname, email, password) VALUES(?, ?, ?, ?)');
  //     $req->execute([
  //       $firstname,
  //       $lastname,
  //       $email,
  //       $password
  //     ]);
  //   } catch (Exception $e) {
  //     echo "This email is already in use";
  //   } 
  // }

  
  function createBadge($name, $description, $shape, $color){
      $bdd = createCursor();
      $req = $bdd->prepare('INSERT INTO badges(name, description, shape, color) VALUES(?, ?, ?, ?, ?)');
      $newBadge = $req->execute([
        $name,
        $description,
        $shape,
        $color
      ]);
  
      return $newBadge;
    }
  
    // DEMANDER A GUILLAUME
  function editBadge($badge_id, $name, $description, $shape, $color){
    $bdd = createCursor();
    $req = $bdd->prepare('UPDATE badges SET name = ?, description=?, shape=?, color=? WHERE id=?');
    $updateBadge = $req->execute([
      $name,
      $description,
      $shape,
      $color,
      $badge_id
    ]);

    return $updateBadge;
    
  }

  function removeBadge($badge_id){
    $bdd=createCursor();
    $req = $bdd->prepare('DELETE FROM badges WHERE id=?');
    $removeBadge = $req->execute([
      $badge_id,
    ]);
    return $removeBadge;
  }

  function grantBadgeToUser($badge_id, $user_id){

  }

  function removeBadgeFromUser($badge_id, $user_id){

  }
?>