<?php
  include_once('functions.php');

  $routes = [];
  $routes['dashboard'] = 'Dashboard';
  $routes['badges'] = 'All badges';
  $routes['logout'] = 'log out';
  
  
 if(isset($_GET['Success'])){
   phpAlerte('Your badge is encoded');
 }

  $requestedPage = 'dashboard';

  if(!empty($_GET['p'])){
    $requestedPage = $_GET['p'];
  }

  if(!isAuthenticated()){
    // include the login page
    include('./pages/login.php');
  }else{
    if(file_exists('pages/' .$requestedPage. '.php')){
      include_once('navbar.php');
      // include the page
      include_once('pages/' .$requestedPage. '.php');
    }else{
      echo "<h1> HEY MAN, THIS PAGE DOESN'T EXIST!! DONT TOUCH MY URL! </h1>";
    }
  }
  
  


  // print_r($_SESSION);

  
?>