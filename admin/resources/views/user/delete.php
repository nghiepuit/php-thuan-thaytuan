<?php 
if (isset($_GET["cid"])) {
	$id = $_GET["cid"];

	checkId ($id,"con=user");

	$data = dataEdit ($conn,$id);

	if (($id == 1) || ($_SESSION["login"]["kt3V_id"] != 1 && $data["level"] == 3)) {
		setFlash ("error" , "Bạn không được phép xóa thành viên này");
		redirect ('con=user');
	} else {
		delete ($conn,$id);
	}
} else {
	redirect("con=user");
}
?>