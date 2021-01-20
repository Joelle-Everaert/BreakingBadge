<?php
  include_once('functions.php');

  $routes = [];
  $routes['dashboard'] = 'Dashboard';
  $routes['badges'] = 'All badges';
  $routes['students'] = 'All students';

  $requestedPage = 'dashboard';

  if(!empty($_GET['p'])){
    $requestedPage = $_GET['p'];
  }

  if(!isAuthenticated()){
    // include the login page
    include ('./pages/login.php');
  }

  else if(isAuthenticated()){
    if(array_key_exists($requestedPage, $routes)){
      header('locaiton: ./pages/' . $requestedPage . '.php');
      include_once('navbar.php');
      // include the page
    }
    echo $requestedPage;
  }
  
?>