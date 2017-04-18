<?php  
function add ($conn,$data,&$error) {
	$check = $conn->prepare("SELECT `name_vi`,`name_en` FROM `u8tr_category` WHERE `name_vi` = :name_vi OR `name_en` = :name_en");
	$check->bindParam(":name_vi",$data["name_vi"],PDO::PARAM_STR);
	$check->bindParam(":name_en",$data["name_en"],PDO::PARAM_STR);
	$check->execute();
	$rowCount = $check->rowCount();

	if ($rowCount == 0) {
		$stmt = $conn->prepare("INSERT INTO `u8tr_category`(`name_vi`, `description_vi`, `slug_vi`, `title_tag_vi`, `keywords_tag_vi`, `description_tag_vi`, `name_en`, `description_en`, `slug_en`, `title_tag_en`, `keywords_tag_en`, `description_tag_en`, `image`, `alt`, `position`, `target`, `robot_tag`, `status`, `parent_id`, `user_id`, `created_at`) VALUES (:name_vi,:description_vi,:slug_vi,:title_tag_vi,:keywords_tag_vi,:description_tag_vi,:name_en,:description_en,:slug_en,:title_tag_en,:keywords_tag_en,:description_tag_en,:image,:alt,:position,:target,:robot_tag,:status,:parent_id,:user_id,:created_at)");
		$stmt->bindParam(":name_vi",$data["name_vi"],PDO::PARAM_STR);
		$stmt->bindParam(":description_vi",$data["description_vi"],PDO::PARAM_STR);
		$stmt->bindParam(":slug_vi",$data["slug_vi"],PDO::PARAM_STR);
		$stmt->bindParam(":title_tag_vi",$data["title_tag_vi"],PDO::PARAM_STR);
		$stmt->bindParam(":keywords_tag_vi",$data["keywords_tag_vi"],PDO::PARAM_STR);
		$stmt->bindParam(":description_tag_vi",$data["description_tag_vi"],PDO::PARAM_STR);
		$stmt->bindParam(":name_en",$data["name_en"],PDO::PARAM_STR);
		$stmt->bindParam(":description_en",$data["description_en"],PDO::PARAM_STR);
		$stmt->bindParam(":slug_en",$data["slug_en"],PDO::PARAM_STR);
		$stmt->bindParam(":title_tag_en",$data["title_tag_en"],PDO::PARAM_STR);
		$stmt->bindParam(":keywords_tag_en",$data["keywords_tag_en"],PDO::PARAM_STR);
		$stmt->bindParam(":description_tag_en",$data["description_tag_en"],PDO::PARAM_STR);
		$stmt->bindParam(":image",$data["image"],PDO::PARAM_STR);
		$stmt->bindParam(":alt",$data["alt"],PDO::PARAM_STR);
		$stmt->bindParam(":position",$data["position"],PDO::PARAM_STR);
		$stmt->bindParam(":target",$data["target"],PDO::PARAM_STR);
		$stmt->bindParam(":robot_tag",$data["robot_tag"],PDO::PARAM_STR);
		$stmt->bindParam(":parent_id",$data["parent_id"],PDO::PARAM_INT);
		$stmt->bindParam(":user_id",$data["user_id"],PDO::PARAM_INT);
		$stmt->bindParam(":status",$data["status"],PDO::PARAM_STR);
		$stmt->bindParam(":created_at",$data["created_at"],PDO::PARAM_INT);
		$stmt->execute();

		if (isset($_POST["btnSaveNew"])) {
			setFlash ("success" , "Oke !! Complate Insert A Category");
			redirect ('con=category&act=add');
		}

		if (isset($_POST["btnSaveClose"])) {
			setFlash ("success" , "Oke !! Complate Insert A Category");
			redirect ('con=category');
		}
	} else {
		$error[] = "This Category Is Exist.Please Choose Category Difference";
	}
}

function data_category ($conn) {
	$stmt = $conn->prepare("SELECT `id`,`name_vi`,`name_en`,`parent_id`,`position`,`status` FROM `u8tr_category` ORDER BY position ASC");
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function category_position ($conn) {
	$stmt = $conn->prepare("SELECT MAX(`position`) as position FROM `u8tr_category` WHERE `parent_id` = 0");
	$stmt->execute();
	$data = $stmt->fetch(PDO::FETCH_ASSOC);
	$position = $data["position"] + 1;
	return $position;
}

function category_delete ($conn,$id) {
	$check = $conn->prepare("SELECT `parent_id` FROM `u8tr_category` WHERE `parent_id` = :parent_id");
	$check->bindParam(":parent_id",$id,PDO::PARAM_INT);
	$check->execute();
	$row = $check->rowCount();
	if ($row > 0) {
		setFlash ("error" , "This Category Don't Delete.Because Have Category Child");
		redirect('con=category');
	} else {
		$stmt = $conn->prepare("DELETE FROM `u8tr_category` WHERE `id` = :id");
		$stmt->bindParam(":id",$id,PDO::PARAM_INT);
		$stmt->execute();
		setFlash ("success" , "Oke !! Complate Delete A Category");
		redirect('con=category');
	}
	
}

function dataEdit ($conn,$id) {
	$stmt = $conn->prepare("SELECT * FROM `u8tr_category` WHERE id = :id");
	$stmt->bindParam(":id",$id,PDO::PARAM_INT);
	$stmt->execute();
	$data = $stmt->fetch(PDO::FETCH_ASSOC);
	return $data;
}

function edit ($conn,$data) {
	$stmt = $conn->prepare("UPDATE `u8tr_category` SET `name_vi`=:name_vi,`description_vi`=:description_vi,`slug_vi`=:slug_vi,`title_tag_vi`=:title_tag_vi,`keywords_tag_vi`=:keywords_tag_vi,`description_tag_vi`=:description_tag_vi,`name_en`=:name_en,`description_en`=:description_en,`slug_en`=:slug_en,`title_tag_en`=:title_tag_en,`keywords_tag_en`=:keywords_tag_en,`description_tag_en`=:description_tag_en,`image`=:image,`alt`=:alt,`position`=:position,`target`=:target,`robot_tag`=:robot_tag,`status`=:status,`parent_id`=:parent_id,`user_id`=:user_id,`updated_at`=:updated_at WHERE `id` =:id");
	$stmt->bindParam(":id",$data["id"],PDO::PARAM_INT);
	$stmt->bindParam(":name_vi",$data["name_vi"],PDO::PARAM_STR);
	$stmt->bindParam(":description_vi",$data["description_vi"],PDO::PARAM_STR);
	$stmt->bindParam(":slug_vi",$data["slug_vi"],PDO::PARAM_STR);
	$stmt->bindParam(":title_tag_vi",$data["title_tag_vi"],PDO::PARAM_STR);
	$stmt->bindParam(":keywords_tag_vi",$data["keywords_tag_vi"],PDO::PARAM_STR);
	$stmt->bindParam(":description_tag_vi",$data["description_tag_vi"],PDO::PARAM_STR);
	$stmt->bindParam(":name_en",$data["name_en"],PDO::PARAM_STR);
	$stmt->bindParam(":description_en",$data["description_en"],PDO::PARAM_STR);
	$stmt->bindParam(":slug_en",$data["slug_en"],PDO::PARAM_STR);
	$stmt->bindParam(":title_tag_en",$data["title_tag_en"],PDO::PARAM_STR);
	$stmt->bindParam(":keywords_tag_en",$data["keywords_tag_en"],PDO::PARAM_STR);
	$stmt->bindParam(":description_tag_en",$data["description_tag_en"],PDO::PARAM_STR);
	$stmt->bindParam(":image",$data["image"],PDO::PARAM_STR);
	$stmt->bindParam(":alt",$data["alt"],PDO::PARAM_STR);
	$stmt->bindParam(":position",$data["position"],PDO::PARAM_STR);
	$stmt->bindParam(":target",$data["target"],PDO::PARAM_STR);
	$stmt->bindParam(":robot_tag",$data["robot_tag"],PDO::PARAM_STR);
	$stmt->bindParam(":parent_id",$data["parent_id"],PDO::PARAM_INT);
	$stmt->bindParam(":user_id",$data["user_id"],PDO::PARAM_INT);
	$stmt->bindParam(":status",$data["status"],PDO::PARAM_STR);
	$stmt->bindParam(":updated_at",$data["updated_at"],PDO::PARAM_INT);
	$stmt->execute();
	
	if (isset($_POST["btnSaveNew"])) {
		setFlash ("success" , "Oke !! Complate Update A Category");
		redirect ('con=category&act=edit&cid='.$data["id"]);
	}

	if (isset($_POST["btnSaveClose"])) {
		setFlash ("success" , "Oke !! Complate Update A Category");
		redirect ('con=category');
	}
}
?>