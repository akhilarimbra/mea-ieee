<div class="container-fluid">
  <br>
  <div class="row">
    <div class="col-md-6">
      <h2 class="article-title"><?php echo substr($sub_title, 0 , -2); ?></h2>
    </div>
    <div class="col-md-6">
      <div class="ui breadcrumb hidden-sm-down">
        <a class="section" href="/">Home</a>
        <div class="divider"> / </div>
        <div class="active section">Events and Activities</div>
      </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="container-fluid">
        <?php  
          $sql = "SELECT * FROM `event` ORDER BY date DESC";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              // output data of each row
              echo "<div class='row'>";
              $count = 0;
              while($row = $result->fetch_assoc()) {
                echo "<a href='/events-and-activities/".$row['id']."'>";
                echo "<div class='col-md-3'>";
                echo "<img class='shadow-effect' src='/public/images/uploads/".$row['image']."' width='100%' />";
                echo "<h3 style='color: black;text-align: center;'>".$row['name']."</h3>";
                echo "</div>";
                echo "</a>";
                $count++;
                if($count == 4) {
                  echo "</div><br>";
                  echo "<div class='row'>";
                  $count = 0;
                }

              }
              echo "</div><br>";
          }
        ?>
   </div>
  </div>
</div>
