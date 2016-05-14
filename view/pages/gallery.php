<div class='container-fluid'>
  <br>
  <div class='row'>
    <div class='col-md-6'>
      <h2 class='article-title'><?php echo substr($sub_title, 0 , -2); ?></h2>
    </div>
    <div class='col-md-6'>
      <div class='ui breadcrumb hidden-sm-down'>
        <a class='section' href='/'>Home</a>
        <div class='divider'> / </div>
        <div class='active section'>Gallery</div>
      </div>
    </div>
  </div>
  <hr>
  <div class='row'>
    <div class='col-md-12'>
      <p class='article-content'>
      Kindly click on the image to enlarge.
      </p>
    </div>
  </div>
  <br>
  <div class='row'>
    <div class='col-lg-12'>
        <?php  
          $sql = "SELECT * FROM `image` WHERE type='Gallery'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              // output data of each row
              echo "<div class='row' id='links'>";
              $count = 0;
              while($row = $result->fetch_assoc()) {
                echo "<a href='/public/images/uploads/".$row['name']."' title='".$row['title']."' data-dialog>
";
                echo "<img class='col-lg-2' width='100%' src='/public/images/uploads/".$row['name']."' alt='".$row['title']."'>";
                echo "</a>";
                $count++;
                if($count == 6) {
                  echo "</div><br>";
                  echo "<div class='row' id='links'>";
                  $count = 0;
                }

              }
              echo "</div><br>";
          }
        ?>
    </div>
  </div>
</div>
<!-- The dialog widget -->
<div id='blueimp-gallery-dialog' data-show='fade' data-hide='fade'>
    <!-- The gallery widget  -->
    <div class='blueimp-gallery blueimp-gallery-carousel blueimp-gallery-controls'>
        <div class='slides'></div>
        <a class='prev'>‹</a>
        <a class='next'>›</a>
        <a class='play-pause'></a>
    </div>
</div>
