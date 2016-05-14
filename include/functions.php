<?php
  function route_about($url_temp){
    switch ($url_temp) {
      case 'sb':
        return 'about-sb.php';
        break;
      case 'ieee':
        return 'about-ieee.php';
        break;
      case 'region10':
        return 'about-region10.php';
        break;
      case 'mea':
        return 'about-mea.php';
        break;
      default:
        return '404.php';
        break;
    }
  }
  function lock() {
    session_start();
    if(!isset($_SESSION['status'])) {
      header("location: /dashboard/login");
    }
  }
  function logout() {
    session_start();
    if(session_destroy()) { //Destroying all sessions
      header("Location: /dashboard/login"); // Redirecting To Home Page
    }
  }
  function is_login() {
    session_start();
    if(isset($_SESSION['status'])) {
      header("location: /dashboard");
    }
  }
?>
