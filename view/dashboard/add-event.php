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
                <form name='login-form' id='login-form' method='post' action='/dashboard/add-new-event'>
                    <div class="form-group">
                      <label>Enter name of the event</label>
                      <input type="text" class="form-control" name='name' id="name"  placeholder="Enter name of the Event" required>
                    </div>
                    <div class="form-group">
                      <label>Give an unique id for the event</label>
                      <input type="text" class="form-control" name='id' id="id"  placeholder="Enter an id of the event" required>
                    </div> 
                    <div class="form-group">
                      <label>Enter the image to be used as the thumbnail for the event</label>
                      <select class="form-control" name="image">
                        <?php  
                          $sql = "SELECT * FROM `image`";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo "<option value='".$row['name']."'>".$row['title']."</option>";
                              }
                          }
                          $conn->close();
                        ?>
                      </select>
                      </div>
                    <div class="form-group">
                      <label>Please give a short description about the event</label>
                      <input type="text" class="form-control" name='short' id="short"  placeholder="Enter a short description of the event" required>
                    </div>
                    <div class="form-group">
                      <label>Select the year of the event</label>
                      <select class='form-control' name='year' id='year'>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Select date of the event</label>
                      <input type="date" class="form-control" name='date'  id="date" required>
                    </div>
                    <div class="form-group">
                      <label>Please give an entire report for the event</label>
                      <textarea id='report' name='report' id='report' class="form-control" rows="30" placeholder='Enter report of the event' required></textarea>
                    </div>    
                    <button type="submit" class="button">Add Event</button>
                  </form>
              </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <?php include 'view/dashboard/partials/js.php'; ?>
</body>
</html>