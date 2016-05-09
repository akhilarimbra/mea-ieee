<?php
  if($home === 'home') {
    $nav_id = 'nav-main-transparent';
  } else {
    $nav_id = 'navmain';
  }
?>
<nav class="navbar navbar-fixed-top navbar-dark bg-primary" id=<?php echo $nav_id; ?>>
  <ul class="nav navbar-nav" id='navtopleft'>
    <li class="nav-item">
      <a class="nav-link"><i class="fa fa-phone"></i> +91 8129609230</a>
    </li>
    <li class="nav-item">
      <a href="/sitemap" class="nav-link">
        <i class="fa fa-sitemap"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa fa-envelope"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa fa-facebook-f"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa fa-google-plus"></i></a>
    </li>
  </ul>
  <ul class="nav navbar-nav pull-xs-right" id='navtopright'>
    <li class="nav-item">
      <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="/about" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/about/ieee">IEEE</a>
          <a class="dropdown-item" href="/about/region10">Region 10</a>
          <a class="dropdown-item" href="/about/mea">MEA College</a>
          <a href="/about/sb" class="dropdown-item">Student Branch</a>
        </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/membership-join">Membership / Join</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/execom">Executive Committee</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="/events" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </li>
    <li class="nav-item">
      <a href="/gallery" class="nav-link">Gallery</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/contact">Contact</a>
    </li>
    <li class="nav-item">
      <a href="http://www.ieee.org" target='_blank' class="nav-link"><img src="/public/images/ieee-logo-black.gif" alt="IEEE Logo " height='20em'/></a>
    </li>
  </ul>
</nav>
