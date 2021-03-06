<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'view/partials/head.php';
      $gallery = 'gallery';
    ?>
  </head>
  <style>
    #header {
      padding-top: .7em;
    }
  </style>
  <body>
    <?php include 'view/partials/nav.php'; ?>
    <div class="container-fluid" id='except-home'>
      <?php include 'view/partials/header.php'; ?>
      <?php include 'view/partials/scroll.php'; ?>
      <br>
      <div class="row">
        <div class="col-lg-12">
          <div class="container-fluid" id='white-bg'>
            <div class="row">
              <div class="col-lg-9">
                <div id='main-content'>
                  <?php include 'view/pages/gallery.php'; ?>
                  <?php include 'view/partials/latest_events.php'; ?>
                  <?php include 'view/partials/social.php'; ?>
                </div>
              </div>
              <div class="col-lg-3">
                <?php include 'view/partials/sidebar.php'; ?>
              </div>
            </div>
            <br>
            <hr>
            <?php include 'view/partials/societies.php'; ?>
            <br>
          </div>
        </div>
      </div>
      <br>
      <?php include 'view/partials/footer.php'; ?>
    </div>
    <?php include 'view/partials/navbottom.php'; ?>
    <!-- jQuery first, then Bootstrap JS. -->
    <?php include 'view/partials/js.php'; ?>
  </body>
</html>
