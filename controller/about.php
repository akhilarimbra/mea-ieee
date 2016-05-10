<?php
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
?>
