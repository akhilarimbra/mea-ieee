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
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php  
                          $sql = "SELECT * FROM `event` ORDER BY date DESC";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo "<td>".$row['id']."</td>";
                                echo "<td>".$row['name']."</td>";
                                echo "<td>".$row['date']."</td>";
                                echo "<td><a href='/dashboard/event-delete/".$row['id']."'>Delete</a></td>";
                              }
                          }
                          $conn->close();
                        ?>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <?php include 'view/dashboard/partials/js.php'; ?>
</body>
</html>
