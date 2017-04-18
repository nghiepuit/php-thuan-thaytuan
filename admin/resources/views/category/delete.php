<?php 
if (isset($_GET["cid"])) {
	$id = $_GET["cid"];

	checkId ($id,"con=category");

	category_delete ($conn,$id);
} else {
	redirect("con=category");
}
?>