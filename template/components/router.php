<?php
  include_once('functions.php');

  $routes = [];
  $routes['dashboard'] = 'Dashboard';
  // $routes['adminDash'] = 'DashboardAdmin';
  $routes['badges'] = 'All badges';
  $routes['students'] = 'All students';
  $routes['logout'] = 'log out';

  include_once('navbar.php');

  $requestedPage = 'dashboard';

  if(!empty($_GET['p'])){
    $requestedPage = $_GET['p'];
  }

  if(!isAuthenticated()){
    // include the login page
    include('./pages/login.php');
  }else if(isAuthenticated()){
    include('pages/' .$requestedPage. '.php');
  }
  
  if(array_key_exists($requestedPage, $routes)){
    
    include_once('navbar.php');
    // include the page
  }


  // print_r($_SESSION);

  
?>