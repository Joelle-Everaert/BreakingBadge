<?php
  include_once('functions.php');

  $routes = [];
  $routes['dashboard'] = 'Dashboard';
  $routes['badges'] = 'All badges';
  $routes['students'] = 'All students';
  $routes['logout'] = 'Log out';

  // include_once('navbar.php');

  $requestedPage = 'dashboard';

  if(!empty($_GET['p'])){
    $requestedPage = $_GET['p'];
  }

  if(!isAuthenticated()){
    // include the login page
    include('./pages/login.php');

    
  }else if(isAuthenticated()){

    if(array_key_exists($requestedPage, $routes)){
    
    include_once('navbar.php');
    include('pages/' .$requestedPage. '.php');
    }
  }
    
 
  // print_r($_SESSION);
?>