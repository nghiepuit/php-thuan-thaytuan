<?php 
if (isset($_GET["act"])) {

	include 'models/Lession.php';

	$act = $_GET["act"];
	switch ($act) {
		case 'add':
			include 'resources/views/lession/add.php';
			break;
		case 'edit':
			include 'resources/views/lession/edit.php';
			break;
		case 'delete':
			include 'resources/views/lession/delete.php';
			break;
		case 'list':
			include 'resources/views/lession/list.php';
			break;
		default:
			include 'resources/views/lession/list.php';
			break;
	}
} else {
	include 'resources/views/lession/list.php';
}
?>