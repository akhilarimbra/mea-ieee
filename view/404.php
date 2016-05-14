<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'view/partials/head.php';
      $gallery = 'gallery';
    ?>
  </head>
  <style>
    #header {
      padding-top: 1em;
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
                  <div class="container-fluid">
                    <br>
                      <div class="row">
                        <div class="col-md-6">
                          <h2 class="article-title" style="color: darkred;">404 Error - Page Not Found</h2>
                        </div>
                        <div class="col-md-6">
                          <div class="ui breadcrumb hidden-sm-down">
                            <a class="section" href="/">Home</a>
                            <div class="divider"> / </div>
                            <div class="active section">404 Error - Page Not Found</div>
                          </div>
                        </div>
                      </div>
                      <br>
                      <img src="/public/images/404-error.jpg" width='100%' alt="404 Error NOt FouNd" />
                  </div>
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
