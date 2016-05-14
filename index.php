<?php
  #remove the directory path we don't want
  include 'include/functions.php';
  include 'include/db_connect.php';
  $request = str_replace("/", "", $_SERVER['REQUEST_URI']);
  //echo $request;
  //echo $_SERVER['REQUEST_URI'];
  //echo "<br>";
  $request = $_SERVER['REQUEST_URI'];
  //echo $request;
  #split the path by '/'
  $url = explode("/", $request);
  //echo $url[2];
  #default include as 404.php
  $include = '404.php';
  $title = "MEA IEEE Student Branch ";
  $sub_title = "";
  $home = "not home";
  #custom routing
  switch ($url[1]) {
    case 'about':
      include 'controller/about.php';
      break;
    case 'membership-and-benefits':
      include 'controller/membership-and-benefits.php';
      break;
    case 'execom':
      include 'controller/execom.php';
      break;
    case 'gallery':
      include 'controller/gallery.php';
      break;
    case 'events-and-activities':
      include 'controller/events.php';
      break;
    case 'contact':
      include 'controller/contact.php';
      break;
    case 'sitemap':
      include 'controller/sitemap.php';
      break;
    case 'dashboard':
      include 'controller/dashboard.php';
      break;
    case 'login':
      include 'controller/login.php';
      break;
    default:
      if (strlen($url[1]) > 0) {
        //echo '404 Error';
        $include = '404.php';
        $sub_title = '404 Error | Page Not Found | ';
      } else {
        //echo 'home';
        $home = 'home';
        $include = 'home.php';
        $title = "IEEE Student Branch | MEA Engineering College, Perinthalmanna";
      }
      break;
  }
  if ($sub_title === "") {
    $title = "IEEE Student Branch | MEA Engineering College, Perinthalmanna";
  } else {
    $title = $sub_title.$title;
  }
  include 'view/'.$include;
?>