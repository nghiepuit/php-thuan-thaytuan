<?php  
function add ($conn,$data,&$error) {
	$check = $conn->prepare("SELECT `email` FROM `u8tr_user` WHERE email = :email");
	$check->bindParam(":email",$data["email"],PDO::PARAM_STR);
	$check->execute();
	$rowCount = $check->rowCount();

	if ($rowCount == 0) {
		$stmt = $conn->prepare("INSERT INTO `u8tr_user`(`email`, `password`, `level`, `firstname`, `lastname`, `phone`, `address`, `facebook`, `avatar`, `status`, `created_at`) VALUES (:email, :password,:level,:firstname,:lastname,:phone,:address,:facebook,:avatar, :status,:created_at)");
		$stmt->bindParam(":email",$data["email"],PDO::PARAM_STR);
		$stmt->bindParam(":password",$data["pass"],PDO::PARAM_STR);
		$stmt->bindParam(":level",$data["level"],PDO::PARAM_INT);
		$stmt->bindParam(":firstname",$data["firstname"],PDO::PARAM_STR);
		$stmt->bindParam(":lastname",$data["lastname"],PDO::PARAM_STR);
		$stmt->bindParam(":phone",$data["phone"],PDO::PARAM_STR);
		$stmt->bindParam(":address",$data["address"],PDO::PARAM_STR);
		$stmt->bindParam(":facebook",$data["facebook"],PDO::PARAM_STR);
		$stmt->bindParam(":avatar",$data["avatar"],PDO::PARAM_STR);
		$stmt->bindParam(":status",$data["status"],PDO::PARAM_STR);
		$stmt->bindParam(":created_at",$data["created_at"],PDO::PARAM_INT);
		$stmt->execute();

		if (isset($_POST["btnSaveNew"])) {
			setFlash ("success" , "Oke !! Complate Insert A User");
			redirect ('con=user&act=add');
		}

		if (isset($_POST["btnSaveClose"])) {
			setFlash ("success" , "Oke !! Complate Insert A User");
			redirect ('con=user');
		}
	} else {
		$error[] = "This Email Is Exist.Please Choose Email Difference";
	}
}

function listUser ($conn) {
	$stmt = $conn->prepare("SELECT id,email,level,status,firstname,lastname FROM `u8tr_user`");
	$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function dataEdit ($conn,$id) {
	$stmt = $conn->prepare("SELECT * FROM `u8tr_user` WHERE id = :id");
	$stmt->bindParam(":id",$id,PDO::PARAM_INT);
	$stmt->execute();
	$data = $stmt->fetch(PDO::FETCH_ASSOC);
	return $data;
}

function edit ($conn,$data) {
	$stmt = $conn->prepare("UPDATE `u8tr_user` SET `password`=:password,`level`=:level,`firstname`=:firstname,`lastname`=:lastname,`phone`=:phone,`address`=:address,`facebook`=:facebook,`avatar`=:avatar,`status`=:status,`updated_at`=:updated_at WHERE `id`=:id");
	$stmt->bindParam(":id",$data["id"],PDO::PARAM_INT);
	$stmt->bindParam(":password",$data["pass"],PDO::PARAM_STR);
	$stmt->bindParam(":level",$data["level"],PDO::PARAM_INT);
	$stmt->bindParam(":firstname",$data["firstname"],PDO::PARAM_STR);
	$stmt->bindParam(":lastname",$data["lastname"],PDO::PARAM_STR);
	$stmt->bindParam(":phone",$data["phone"],PDO::PARAM_STR);
	$stmt->bindParam(":address",$data["address"],PDO::PARAM_STR);
	$stmt->bindParam(":facebook",$data["facebook"],PDO::PARAM_STR);
	$stmt->bindParam(":avatar",$data["avatar"],PDO::PARAM_STR);
	$stmt->bindParam(":status",$data["status"],PDO::PARAM_STR);
	$stmt->bindParam(":updated_at",$data["updated_at"],PDO::PARAM_INT);
	$stmt->execute();

	if (isset($_POST["btnSave"])) {
		setFlash ("success" , "Oke !! Complate Updated A User");
		redirect ('con=user&act=edit&cid='.$data["id"]);
	}

	if (isset($_POST["btnSaveClose"])) {
		setFlash ("success" , "Oke !! Complate Updated A User");
		redirect ('con=user');
	}
}

function delete ($conn,$id) {
	if (category_user_count($conn,$id)) {
		$stmt = $conn->prepare("DELETE FROM `u8tr_user` WHERE `id` = :id");
		$stmt->bindParam(":id",$id,PDO::PARAM_INT);
		$stmt->execute();
		setFlash("success","Complete Delete A User");
		redirect('con=user');
	} else {
		setFlash("error","This User Have Child In Category");
		redirect('con=user');
	}
	
}

function category_user_count ($conn,$id) {
	$stmt = $conn->prepare("SELECT * FROM `u8tr_user` as u , `u8tr_cateogry` as c WHERE c.user_id = u.id AND u.id = :id");
	$stmt->bindParam(":id",$id,PDO::PARAM_INT);
	$stmt->execute();
	$row = $stmt->rowCount();
	if ($row > 0) {
		return false;
	} else {
		return true;
	}
}
?>