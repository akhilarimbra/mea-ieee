<?php
  #remove the directory path we don't want
  include 'include/functions.php';
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
      if ($url[2] != NULL) {
        $include = route_about($url[2]);
        switch ($url[2]) {
          case 'sb':
            $sub_title = 'About MEA IEEE Student Branch | ';
            break;
          case 'ieee':
            $sub_title = 'About IEEE | ';
            break;
          case 'region10':
            $sub_title = 'About Region 10 | ';
            break;
          case 'mea':
            $sub_title = 'About MEA Engineering College | ';
            break;
          default:
            $sub_title = '404 Error | Not Found | ';
            break;
        }
        #echo 'about sub page';
      } else {
        header("Location: /about/sb");
        //$sub_title = "About MEA IEEE Student Branch | ";
        //$include = 'about-sb.php';
        #echo 'about main page';
      }
      break;
    case 'membership-join':
      $include = 'membership-join.php';
      $sub_title = 'Take Membership and Join IEEE | ';
      break;
    case 'execom':
      $include = 'execom.php';
      $sub_title = 'Executive Committee | ';
      break;
    case 'gallery':
      $include = 'gallery.php';
      $sub_title = 'Gallery | ';
      break;
    case 'events':
      $include = 'events.php';
      $sub_title = 'Events | ';
      break;
    case 'sitemap':
      $sub_title = 'Sitemap | ';
      $include = 'sitemap.php';
      break;
    default:
      $include = 'home.php';
      $home = 'home';
      break;
  }
  if ($sub_title === "") {
    $title = "MEA IEEE Student Branch - MEA Engineering College";
  } else {
    $title = $sub_title.$title;
  }
  include 'view/'.$include;
?>
