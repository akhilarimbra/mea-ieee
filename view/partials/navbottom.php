<?php
  if($home === 'home') {
    $nav_id = 'nav-main-transparent';
    $navclass = 'navbar navbar-fixed-bottom navbar-dark bg-primary';
  } else {
    $nav_id = 'navmain';
    $navclass = 'navbar navbar-static-bottom navbar-dark bg-primary';
  }
?>
<nav class="<?php echo $navclass;?>" id=<?php echo $nav_id; ?>>
  <ul class="nav navbar-nav" id='navtopleft'>
    <li class="nav-item">
      <a class="nav-link">
        2016 <i class="fa fa-copyright"></i> MEA IEEE Student Branch, All Rights Reserved
      </a>
    </li>
  </ul>
  <ul class="nav navbar-nav pull-xs-right" id='navtopright'>
    <li class="nav-item"><a class="nav-link" href='/sitemap'>Sitemap</a></li>
    <li class="nav-item"><a class="nav-link" href='http://www.ieee.org/' target="_blank">IEEE.org</a></li>
    <li class="nav-item"><a class="nav-link" href='http://ieeexplore.ieee.org/' target="_blank">IEEE Xplore Digital Library</a></li>
    <li class="nav-item"><a class="nav-link" href='http://standards.ieee.org/' target="_blank">IEEE Standards</a></li>
    <li class="nav-item"><a class="nav-link" href='http://spectrum.ieee.org/' target="_blank">IEEE Spectrum</a></li>
    <li class="nav-item"><a class="nav-link" href='http://www.ieee.org/sitemap' target="_blank">More Sites</a></li>
  </ul>
</nav>
