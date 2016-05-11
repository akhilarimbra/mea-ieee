<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'view/dashboard/partials/head.php'; ?>
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include 'view/dashboard/partials/nav.php'; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo substr($sub_title, 0 , -2); ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
              <!-- Content Goes Here -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <?php include 'view/dashboard/partials/js.php'; ?>
</body>
</html>
