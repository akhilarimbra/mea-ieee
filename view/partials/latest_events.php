<div class="container-fluid hidden-sm-down">
  <hr>
  <div class="row">
    <div class="col-md-12">
      <h2 style="color: black;padding-bottom: .5em;">Latest Events : </h2>
    </div>
  </div>
        <?php  
          $sql = "SELECT * FROM `event` ORDER BY date DESC LIMIT 0,4";
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
