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
?>
