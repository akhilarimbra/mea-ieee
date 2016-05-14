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
                    <th>Name</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>View</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                        <?php  
                          $sql = "SELECT * FROM `image` ORDER BY title";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>".$row['name']."</td>";
                                echo "<td>".$row['title']."</td>";
                                echo "<td>".$row['type']."</td>";
                                echo "<td><a target='_blank' href='/public/images/uploads/".$row['name']."'>View</a></td>";
                                echo "<td><a href='/dashboard/image-delete/".$row['name']."'>Delete</a></td></tr>";
                              }
                          }
                          $conn->close();
                        ?>
                </tbody>
            </table>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <?php include 'view/dashboard/partials/js.php'; ?>
</body>
</html>
