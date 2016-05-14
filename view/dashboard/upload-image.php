<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'view/dashboard/partials/head.php'; ?>
</head>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be exactly 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,$_SERVER['DOCUMENT_ROOT']."/public/images/uploads/".$file_name);
         echo "Success";
         echo "<br>";
      }else{
         print_r($errors);
      }
      $type = $_POST['type'];
      $title = $_POST['title'];
      $sql = "INSERT INTO `image`(`name`, `type`, `title`) 
        VALUES ('$file_name', '$type', '$title')";

      if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
   }
?>
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
              <div class="col-lg-12">
                  <form action="" method="POST" enctype="multipart/form-data">
                     <input type="file" name="image" required/>
                     <br>
                     Enter Title for the image : 
                     <input type="text" name='title' placeholder="Enter title here" required>
                     </input>
                     <br>
                     <br>
                     <select name='type' required="">
                       <option>Gallery</option>
                       <option>Image</option>
                     </select>
                     <br>
                     <br>
                     <input type="submit"/>
                  </form> 
                 <br>
                 <ul>
                    <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
                    <li>File size: <?php echo $_FILES['image']['size'];  ?>
                    <li>File type: <?php echo $_FILES['image']['type'] ?>
                    <li>Image type: <?php echo $_POST['type']; ?>
                 </ul>             
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <?php include 'view/dashboard/partials/js.php'; ?>
</body>
</html>
