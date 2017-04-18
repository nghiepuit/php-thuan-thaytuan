<?php

function dataEdit($conn, $id)
{
    $stmt = $conn->prepare("SELECT * FROM `u8tr_course` WHERE id = :id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function course_delete($conn, $id)
{
    $stmt = $conn->prepare("DELETE FROM `u8tr_course` WHERE `id` = :id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    if ($stmt->execute()) {
        $delete = $conn->prepare("DELETE FROM `u8tr_course_category` WHERE `course_id` = :id");
        $delete->bindParam(":id", $id, PDO::PARAM_INT);
        $delete->execute();
        setFlash("success", "Oke !! Complate Delete A Course");
        redirect('con=course');
    }
}

function data_checkbox_course_category($conn, $id)
{
    $stmt = $conn->prepare("SELECT category_id
                            FROM `u8tr_course_category`
                            WHERE course_id = $id");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function data_course_category($conn, $id)
{
    $stmt = $conn->prepare("SELECT cc.id,cc.category_id,cc.course_id, c.id, cat.parent_id, cat.name_vi
                            FROM `u8tr_course_category` as cc, `u8tr_course` as c, `u8tr_category` as cat
                            WHERE cc.course_id = c.id AND c.id = $id AND cat.id = cc.category_id");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function listCourse($conn)
{
    $stmt = $conn->prepare("SELECT `id`,`name_vi`,`name_en`,`status`,`featured` FROM `u8tr_course`");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function data_category($conn)
{
    $stmt = $conn->prepare("SELECT `id`,`name_vi`,`name_en`,`parent_id`,`position`,`status` FROM `u8tr_category` ORDER BY position ASC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function add($conn, $data, &$error)
{
    $check = $conn->prepare("SELECT `name_vi` FROM `u8tr_course` WHERE `name_vi` = :name_vi");
    $check->bindParam(":name_vi", $data["name_vi"], PDO::PARAM_STR);
    $check->execute();
    $row = $check->rowCount();
    if ($row == 0) {
        $stmt = $conn->prepare("INSERT INTO `u8tr_course`(`name_vi`, `fee_vi`, `description_vi`, `slug_vi`, `title_tag_vi`, `keywords_tag_vi`, `description_tag_vi`, `name_en`, `fee_en`, `description_en`, `slug_en`, `title_tag_en`, `keywords_tag_en`, `description_tag_en`, `author`, `level`, `target`, `robot_tag`, `image`, `alt`, `status`, `featured`, `user_id`, `created_at`) VALUES (:name_vi,:fee_vi,:description_vi,:slug_vi,:title_tag_vi,:keywords_tag_vi,:description_tag_vi,:name_en,:fee_en,:description_en,:slug_en,:title_tag_en,:keywords_tag_en,:description_tag_en,:author,:level,:target,:robot_tag,:image,:alt,:status,:featured,:user_id,:created_at)");
        $stmt->bindParam(':name_vi', $data["name_vi"], PDO::PARAM_STR);
        $stmt->bindParam(':fee_vi', $data["fee_vi"], PDO::PARAM_INT);
        $stmt->bindParam(':description_vi', $data["description_vi"], PDO::PARAM_STR);
        $stmt->bindParam(':slug_vi', $data["slug_vi"], PDO::PARAM_STR);
        $stmt->bindParam(':title_tag_vi', $data["title_tag_vi"], PDO::PARAM_STR);
        $stmt->bindParam(':keywords_tag_vi', $data["keywords_tag_vi"], PDO::PARAM_STR);
        $stmt->bindParam(':description_tag_vi', $data["description_tag_vi"], PDO::PARAM_STR);
        $stmt->bindParam(':name_en', $data["name_en"], PDO::PARAM_STR);
        $stmt->bindParam(':fee_en', $data["fee_en"], PDO::PARAM_STR);
        $stmt->bindParam(':description_en', $data["description_en"], PDO::PARAM_STR);
        $stmt->bindParam(':slug_en', $data["slug_en"], PDO::PARAM_STR);
        $stmt->bindParam(':title_tag_en', $data["title_tag_en"], PDO::PARAM_STR);
        $stmt->bindParam(':keywords_tag_en', $data["keywords_tag_en"], PDO::PARAM_STR);
        $stmt->bindParam(':description_tag_en', $data["description_tag_en"], PDO::PARAM_STR);
        $stmt->bindParam(':author', $data["author"], PDO::PARAM_STR);
        $stmt->bindParam(':level', $data["level"], PDO::PARAM_INT);
        $stmt->bindParam(':target', $data["target"], PDO::PARAM_STR);
        $stmt->bindParam(':robot_tag', $data["robot_tag"], PDO::PARAM_STR);
        $stmt->bindParam(':image', $data["image"], PDO::PARAM_STR);
        $stmt->bindParam(':alt', $data["alt"], PDO::PARAM_STR);
        $stmt->bindParam(':status', $data["status"], PDO::PARAM_STR);
        $stmt->bindParam(':featured', $data["featured"], PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $data["user_id"], PDO::PARAM_INT);
        $stmt->bindParam(':created_at', $data["created_at"], PDO::PARAM_INT);
        $result = $stmt->execute();
        $id_course = $conn->lastInsertId();

        if ($result == 1) {
            foreach ($data["category"] as $value) {
                $stmt_category = $conn->prepare("INSERT INTO `u8tr_course_category`(`category_id`, `course_id`) VALUES (:category_id,:course_id)");
                $stmt_category->bindParam(":course_id", $id_course, PDO::PARAM_INT);
                $stmt_category->bindParam(":category_id", $value, PDO::PARAM_INT);
                $stmt_category->execute();
            }
        }

        if (isset($_POST["btnSaveNew"])) {
            setFlash("success", "Oke !! Complate Insert A Course");
            redirect('con=course&act=add');
        }

        if (isset($_POST["btnSaveClose"])) {
            setFlash("success", "Oke !! Complate Insert A Course");
            redirect('con=course');
        }
    } else {
        $error[] = "This Course Is Exist.Please Choose Course Difference";
    }
}

function edit($conn, $data)
{
    $stmt = $conn->prepare("UPDATE `u8tr_course` SET `name_vi`=:name_vi, `fee_vi`=:fee_vi,`description_vi`=:description_vi,`slug_vi`=:slug_vi,`title_tag_vi`=:title_tag_vi,`keywords_tag_vi`=:keywords_tag_vi,`description_tag_vi`=:description_tag_vi,`name_en`=:name_en, `fee_en`=:fee_en,`description_en`=:description_en,`slug_en`=:slug_en,`title_tag_en`=:title_tag_en,`keywords_tag_en`=:keywords_tag_en,`description_tag_en`=:description_tag_en, `author`=:author,`image`=:image,`alt`=:alt,`level`=:level,`target`=:target,`robot_tag`=:robot_tag,`status`=:status,`featured`=:featured,`user_id`=:user_id,`updated_at`=:updated_at WHERE `id` =:id");
    $stmt->bindParam(":id",$data["id"],PDO::PARAM_INT);
    $stmt->bindParam(':name_vi', $data["name_vi"], PDO::PARAM_STR);
    $stmt->bindParam(':fee_vi', $data["fee_vi"], PDO::PARAM_INT);
    $stmt->bindParam(':description_vi', $data["description_vi"], PDO::PARAM_STR);
    $stmt->bindParam(':slug_vi', $data["slug_vi"], PDO::PARAM_STR);
    $stmt->bindParam(':title_tag_vi', $data["title_tag_vi"], PDO::PARAM_STR);
    $stmt->bindParam(':keywords_tag_vi', $data["keywords_tag_vi"], PDO::PARAM_STR);
    $stmt->bindParam(':description_tag_vi', $data["description_tag_vi"], PDO::PARAM_STR);
    $stmt->bindParam(':name_en', $data["name_en"], PDO::PARAM_STR);
    $stmt->bindParam(':fee_en', $data["fee_en"], PDO::PARAM_STR);
    $stmt->bindParam(':description_en', $data["description_en"], PDO::PARAM_STR);
    $stmt->bindParam(':slug_en', $data["slug_en"], PDO::PARAM_STR);
    $stmt->bindParam(':title_tag_en', $data["title_tag_en"], PDO::PARAM_STR);
    $stmt->bindParam(':keywords_tag_en', $data["keywords_tag_en"], PDO::PARAM_STR);
    $stmt->bindParam(':description_tag_en', $data["description_tag_en"], PDO::PARAM_STR);
    $stmt->bindParam(':author', $data["author"], PDO::PARAM_STR);
    $stmt->bindParam(':level', $data["level"], PDO::PARAM_INT);
    $stmt->bindParam(':target', $data["target"], PDO::PARAM_STR);
    $stmt->bindParam(':robot_tag', $data["robot_tag"], PDO::PARAM_STR);
    $stmt->bindParam(':image', $data["image"], PDO::PARAM_STR);
    $stmt->bindParam(':alt', $data["alt"], PDO::PARAM_STR);
    $stmt->bindParam(':status', $data["status"], PDO::PARAM_STR);
    $stmt->bindParam(':featured', $data["featured"], PDO::PARAM_STR);
    $stmt->bindParam(':user_id', $data["user_id"], PDO::PARAM_INT);
    $stmt->bindParam(":updated_at", $data["updated_at"], PDO::PARAM_INT);
    $result = $stmt->execute();
    $id_course = $data["id"];

    if ($result == 1) {
        $delete = $conn->prepare("DELETE FROM `u8tr_course_category` WHERE `course_id` = :id");
        $delete->bindParam(":id", $id_course, PDO::PARAM_INT);
        $delete->execute();
        foreach ($data["category"] as $value) {
            $stmt_category = $conn->prepare("INSERT INTO `u8tr_course_category`(`category_id`, `course_id`) VALUES (:category_id,:course_id)");
            $stmt_category->bindParam(":course_id", $data["id"], PDO::PARAM_INT);
            $stmt_category->bindParam(":category_id", $value, PDO::PARAM_INT);
            $stmt_category->execute();
        }
    }

    if (isset($_POST["btnSaveNew"])) {
        setFlash("success", "Oke !! Complate Update A Course");
//        redirect('con=course&act=edit&cid=' . $data["id"]);
    }

    if (isset($_POST["btnSaveClose"])) {
        setFlash("success", "Oke !! Complate Update A Course");
        redirect('con=course');
    }
}

?>