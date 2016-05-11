<?php
	if ($url[2] != NULL) {
		switch ($url[2]) {
			case 'events':
				$include = 'dashboard/events.php';
				$sub_title = 'All Events | ';
				break;
			case 'add-event':
				$include = 'dashboard/add-event.php';
				$sub_title = 'Add a New Event | ';
				break;
			case 'gallery':
				$include = 'dashboard/gallery.php';
				$sub_title = 'Gallery | ';
				break;
			case 'images':
				$include = 'dashboard/images.php';
				$sub_title = 'Images | ';
				break;
			case 'upload-image':
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
		$include = 'dashboard/index.php';
		$sub_title = 'Dashboard | ';
	}
?>
