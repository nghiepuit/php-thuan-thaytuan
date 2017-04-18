<div class="col-md-12">
    <?php include 'resources/blocks/error.php'; ?>
    <?php include 'resources/blocks/error-flash.php'; ?>
    <?php include 'resources/blocks/success.php'; ?>
</div>
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">List Course</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
            <tr>
                <th width="50px">ID</th>
                <th>Course Name</th>
                <th>Category</th>
                <th>Status</th>
                <th>Featured</th>
                <th class="text-center" width="70px">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $courses = listCourse($conn);
            foreach ($courses as $course) {
                ?>
                <tr>
                    <td><?php echo $course['id']; ?></td>
                    <td>
                        <a href="index.php?con=course&act=edit&cid=<?php echo $course['id']; ?>"><?php echo $course['name_vi'] . '(' . $course['name_en'] . ')' ?></a>
                    </td>
                    <td>
                        <?php
                            $data_course_category = data_course_category($conn,$course['id']);
                            recursionCategory($data_course_category);
                        ?>
                    </td>
                    <td>
                        <input type="checkbox" name="chkStatus" data-on-color="success" data-off-color="danger"
                               data-on-text="On" data-off-text="Off" class="switch" data-table="u8tr_course"
                               data-col="status"
                               data-id="<?php echo $course["id"] ?>" <?php echo ($course["status"] == "On") ? "checked" : "" ?> />
                    </td>
                    <td>
                        <input type="checkbox" name="chkStatus" data-on-color="success" data-off-color="danger"
                               data-on-text="On" data-off-text="Off" class="switch" data-table="u8tr_course"
                               data-col="featured"
                               data-id="<?php echo $course["id"] ?>" <?php echo ($course["featured"] == "On") ? "checked" : "" ?> />
                    </td>
                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="text-primary-600"><a href="index.php?con=course&act=edit&cid=<?php echo $course["id"] ?>"
                                                            data-popup="tooltip" title="Edit"><i
                                            class="icon-pencil7"></i></a></li>
                            <li class="text-danger-600"><a href="index.php?con=course&act=delete&cid=<?php echo $course["id"] ?>"
                                                           data-popup="tooltip" title="Remove" class="sweet_warning"><i
                                            class="icon-trash"></i></a></li>
                        </ul>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
