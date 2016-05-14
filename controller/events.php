<?php
	if ($url[2] != NULL) {
		  $id = $url[2];
		  $name = '';
		  $short = '';
		  $image = '';
		  $date = '';
		  $year = '';
		  $report = '';
          $sql = "SELECT * FROM `event` WHERE id='$id'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
              	$name = $row['name'];
              	$short = $row['short'];
              	$image = $row['image'];
              	$date = $row['date'];
              	$year = $row['year'];
              	$report = $row['report'];
              }
          }
		$include = 'single-event.php';
		$sub_title = $name." | ";
	} else {
		$include = 'events.php';
		$sub_title = 'Events and Activities | ';
	}
?>