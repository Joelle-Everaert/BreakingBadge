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
      $_SESSION['firstname'] = $results['firstname'];
      $_SESSION['account_type'] = $results['account_type'];
      // $_SESSION['email'] = $email;
      return true;
    }
    return false;
  }

  function logout(){
    session_start_once();
    session_destroy();
  }
//cest bon
  function getBadges(){
    $bdd = createCursor();
    $badges = $bdd->query('SELECT name, description, shape, color from badges');
    return $badges;
  }

  //cest bon
  function getUsers(){
    $bdd = createCursor();
    $users = $bdd->query('SELECT firstname, lastname, email FROM users');
    return $users;
  }

// AFFICHER LES USERS AVEC ACCOUNT SPECIFIQUE
  //cest bon
  function getUserNormie(){
    $bdd = createCursor();
    $userNormie = $bdd->query('SELECT firstname, lastname, email FROM users WHERE account_type = "NORMIE"');
    return $userNormie;
  }


// FONCTION CREER UTILISATEURS + CONNEXION BDD
  // function createUser($firstname, $lastname, $email, $password, $account){
  //   $password = password_hash($password, PASSWORD_DEFAULT);
  //   $bdd = createCursor();
  //   $request = $bdd->prepare('SELECT EXISTS(SELECT email FROM users where email = ?');

  //   $request->execute([
  //     $_POST['email']
  //   ]);
  //     $result = $request->fetchColumn();
  //     $request->closeCursor();

  //     if(!$result){
  //       $req = $bdd->prepare('INSERT INTO users(firstname, lastname, email, password) VALUES(?, ?, ?, ?)');
  //       //     $req->execute([
  //       //       $firstname,
  //       //       $lastname,
  //       //       $email,
  //       //       $password
  //       //     ]);
  //       //   } catch (Exception $e) {
  //       //     echo "This email is already in use";
  //       //   } 
  //       }
  //     }    

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
    $req = $bdd->prepare('UPDATE badges SET name = ?, description=?, shape=?, color=? WHERE id_badge=?');
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
    $req = $bdd->prepare('DELETE FROM badges WHERE id_badge=?');
    $removeBadge = $req->execute([
      $badge_id,
    ]);
    return $removeBadge;
  }
// function for admin to see user badges
  //cest bon
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
?>