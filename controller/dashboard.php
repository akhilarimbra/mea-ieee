<?php
	if ($url[2] != NULL) {
		switch ($url[2]) {
			case 'login':
				is_login();
				$include = 'dashboard/login.php';
				$sub_title = 'Please Do Login to Continue | ';
				break;
			case 'check-login':
				$username = $_POST['username'];
				$password = $_POST['password'];
				// Query = SELECT `username`, `password` FROM `user` WHERE `username` AND `password`
				$sql = "SELECT `username`, `password` FROM `user` 
					WHERE `username` = '$username' AND `password` = '$password'";
				$result = $conn->query($sql);
				//checking result
				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        if ($password == $row["password"]) {
				        	session_start();
				        	$_SESSION['status'] = 1;
				        	header("location: /dashboard");
				        } else{
							header("location: /dashboard/login/");
				        }
				    }
				} else {
				    header("location: /dashboard/login/");
				}
				$conn->close();
				break;
			case 'logout':
				logout();
				break;
			case 'event-delete':
				lock();
				$id = $url[3];
				//DELETE FROM `event` WHERE `id`
				$sql = "DELETE FROM `event` WHERE `id`='$id'";
				if ($conn->query($sql) === TRUE) {
				    echo "Record deleted successfully";
				} else {
				    echo "Error: " . $sql . "<br>" . $conn->error;
				}
				$include = 'dashboard/events.php';
				$sub_title = 'View All Events | ';
				$conn->close();
				break;
			case 'image-delete':
				lock();
				$name = $url[3];
				//DELETE FROM `event` WHERE `id`
				$sql = "DELETE FROM `image` WHERE `name`='$name'";
				if ($conn->query($sql) === TRUE) {
				    echo "Record deleted successfully";
				    unlink($_SERVER['DOCUMENT_ROOT']."/public/images/uploads/".$name);
				} else {
				    echo "Error: " . $sql . "<br>" . $conn->error;
				}
				$include = 'dashboard/images.php';
				$sub_title = 'Images | ';
				$conn->close();
				break;
			case 'add-new-event':
				lock();
				$id = $_POST['id'];
				$name = $_POST['name'];
				$image = $_POST['image'];
				$short = $_POST['short'];
				$report = $_POST['report'];
				$date = $_POST['date'];
				$year = $_POST['year'];
				$sql = "INSERT INTO `event`
					(`id`, `name`, `image`, `short`, `date`, `year`, `report`) 
					VALUES ('$id', '$name', '$image', '$short', '$date', '$year', '$report')";
				if ($conn->query($sql) === TRUE) {
				    echo "New record created successfully";
				} else {
				    echo "Error: " . $sql . "<br>" . $conn->error;
				}
				$include = 'dashboard/add-event.php';
				$sub_title = 'Add Event | ';
				$conn->close();
				break;
			case 'add-scroll':
				lock();
				$scroll = $_POST['scroll'];
				$date = date("Y-m-d");
				$sql = "INSERT INTO `scroll`(`scroll`, `date`) 
					VALUES ('$scroll', '$date')";
				if ($conn->query($sql) === TRUE) {
				    echo "New record created successfully";
				} else {
				    echo "Error: " . $sql . "<br>" . $conn->error;
				}
				$include = 'dashboard/add-notification.php';
				$sub_title = 'Add Notification | ';
				$conn->close();
				break;
			case 'add-notification':
				lock();
				$include = 'dashboard/add-notification.php';
				$sub_title = 'Add Notification | ';
				break;
			case 'events':
				lock();
				$include = 'dashboard/events.php';
				$sub_title = 'All Events | ';
				break;
			case 'add-event':
				lock();
				$include = 'dashboard/add-event.php';
				$sub_title = 'Add a New Event | ';
				break;
			case 'gallery':
				lock();
				$include = 'dashboard/gallery.php';
				$sub_title = 'Gallery | ';
				break;
			case 'images':
				lock();
				$include = 'dashboard/images.php';
				$sub_title = 'Images | ';
				break;
			case 'upload-image':
				lock();
				$include = 'dashboard/upload-image.php';
				$sub_title = 'Upload a New Image | ';
				break;
			default:
				$include = '404.php';
				$sub_title = '404 Error | Page Not Found | ';
				break;
		}
		$sub_title = $sub_title.'Dashboard | ';

	} else {
		lock();
		$include = 'dashboard/index.php';
		$sub_title = 'Dashboard | ';
	}
?>