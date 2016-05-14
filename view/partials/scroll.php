<div class="row" id='marquee'>
    <marquee>
        <?php  
          $sql = "SELECT `scroll`, `date` FROM `scroll` ORDER BY date DESC LIMIT 0,10";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo $row['scroll'];
                echo ". ";
              }
          }
        ?>
    </marquee>
</div>
