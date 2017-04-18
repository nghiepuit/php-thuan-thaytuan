<?php 
include 'models/Course.php';
if (isset($_GET["act"])) {
	$act = $_GET["act"];
	switch ($act) {
		case 'add':
			include 'resources/views/course/add.php';
			break;
		case 'edit':
			include 'resources/views/course/edit.php';
			break;
		case 'delete':
			include 'resources/views/course/delete.php';
			break;
		case 'list':
			include 'resources/views/course/list.php';
			break;
		default:
			include 'resources/views/course/list.php';
			break;
	}
} else {
	include 'resources/views/course/list.php';
}
?>