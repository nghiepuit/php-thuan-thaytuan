<?php
if (isset($_GET["cid"])) {
    $id = $_GET["cid"];

    checkId ($id,"con=course");

    course_delete ($conn,$id);
} else {
    redirect("con=course");
}
?>