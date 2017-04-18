<?php
$error = array();
if ((isset($_POST["btnSaveNew"]) || isset($_POST["btnSaveClose"])) && token()) {
	if (checkEmpty($_POST["txtNameVi"])) {
		$error[] = "Please Enter Name Course Vietnamese";
	} 

	if (empty($_POST["chkCategory"])) {
		$error[] = "Please Choose  Category";
	}

	if (checkEmpty($_POST["txtSlugVi"])) {
		$error[] = "Please Enter Slug Vietnamese";
	}

	if (checkEmpty($_POST["txtTitleTagVi"])) {
		$error[] = "Please Enter Title Tag Vietnamese";
	}

	if (checkEmpty($_POST["txtKeywordsVi"])) {
		$error[] = "Please Enter Keywords Tag Vietnamese";
	}

	if (checkEmpty($_POST["txtMetaDescriptionVi"])) {
		$error[] = "Please Enter Description Tag Vietnamese";
	}

	if (empty($error)) {
		$data = array(
				'name_vi'            => emptyToNull($_POST["txtNameVi"]),
				'fee_vi'             => emptyToNull($_POST["txtFeeVi"]),
				'description_vi'     => emptyToNull($_POST["txtDescriptionVi"]),
				'slug_vi'            => emptyToNull($_POST["txtSlugVi"]),
				'title_tag_vi'       => emptyToNull($_POST["txtTitleTagVi"]),
				'keywords_tag_vi'    => emptyToNull($_POST["txtKeywordsVi"]),
				'description_tag_vi' => emptyToNull($_POST["txtMetaDescriptionVi"]),
				'name_en'            => emptyToNull($_POST["txtNameEn"]),
				'fee_en'             => emptyToNull($_POST["txtFeeEn"]),
				'description_en'     => emptyToNull($_POST["txtDescriptionEn"]),
				'slug_en'            => emptyToNull($_POST["txtSlugEn"]),
				'title_tag_en'       => emptyToNull($_POST["txtTitleTagEn"]),
				'keywords_tag_en'    => emptyToNull($_POST["txtKeywordsEn"]),
				'description_tag_en' => emptyToNull($_POST["txtMetaDescriptionEn"]),
				'image'              => emptyToNull($_POST["txtImage"]),
				'alt'                => emptyToNull($_POST["txtAlt"]),
				'author'             => emptyToNull($_POST["txtAuthor"]),
				'level'              => $_POST["sltLevel"],
				'target'             => $_POST["sltTarget"],
				'robot_tag'          => $_POST["sltMetaRobot"],
				'status'             => (isset($_POST["chkStatus"])) ? "On" : "Off",
				'featured'           => (isset($_POST["chk"])) ? "On" : "Off",
				'user_id'            => $_SESSION["login"]["kt3V_id"],
				'created_at'         => time(),
				'category'           => $_POST["chkCategory"]
			);
		add ($conn,$data,$error);
	}
}
?>
<form action="" method="POST" accept-charset="utf-8">
	<?php form_token () ?>
	<div class="col-md-12">
		<div class="panel panel-body border-top-primary text-left">
			<button type="submit" name="btnSaveNew" value="btnSaveNew" class="btn btn-success btn-labeled"><b><i class="icon-add"></i></b> Save & New</button>
			<button type="submit" name="btnSaveClose" value="btnSaveClose" class="btn btn-default btn-labeled"><b><i class="icon-add-to-list"></i></b> Save & Close</button>
			<a href="index.php?con=course" class="btn btn-danger btn-labeled"><b><i class="icon-close2"></i></b> Close</a>
		</div>
	</div>
	<div class="col-md-12">
		<?php include 'resources/blocks/error.php'; ?>

		<?php include 'resources/blocks/success.php'; ?>
	</div>
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Add Course</h6>
				<div class="heading-elements">
					<ul class="icons-list">
	            		<li><a data-action="collapse" class=""></a></li>
	            		<li><a data-action="reload"></a></li>
	            		<li><a data-action="close"></a></li>
	            	</ul>
	        	</div>
			</div>

			<div class="panel-body" style="display: block;">
				<div class="tabbable tab-content-bordered">
					<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
						<li class="active"><a href="#vietnamese" data-toggle="tab" aria-expanded="true">Vietnamese</a></li>
						<li class=""><a href="#english" data-toggle="tab" aria-expanded="false">English</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane has-padding active" id="vietnamese">
							<div class="form-group">
								<label class="control-label">Course Name (Vi)</label>
								<input type="text" id="name-slug-vi" name="txtNameVi" class="form-control" placeholder="Please Enter Course Name" <?php issetInput('txtNameVi') ?> />
							</div>
							<div class="form-group">
								<label class="control-label">Fee (VNĐ)</label>
								<input type="text" name="txtFeeVi" class="form-control" placeholder="Please Enter Fee" <?php issetInput('txtFeeVi') ?> />
							</div>
							<div class="form-group">
								<label class="control-label">Description (Vi)</label>
								<textarea name="txtDescriptionVi"><?php issetTextarea('txtDescriptionVi') ?></textarea>
								<script type="text/javascript">
									 CKEDITOR.replace('txtDescriptionVi', {
									 	height: '400px',
									 	extraPlugins: 'forms',
									 	filebrowserBrowseUrl: 'public/js/ckfinder/ckfinder.html',
									 	filebrowserUploadUrl: 'public/js/ckfinder/connector?command=QuickUpload&type=Files'
									 });
								</script>
							</div>
							<div class="form-group">
								<label class="control-label">Slug URL (Vi)</label>
								<input type="text" id="txtSlugVi" name="txtSlugVi" class="form-control" placeholder="Please Enter Slug URL" <?php issetInput('txtSlugVi') ?> />
							</div>
							<div class="form-group" style="margin-bottom: 50px">
								<label class="control-label">Title Tag (Vi) (Ex : Keyword Primary - Keyword Secondary)</label>
								<input type="text" id="txtTitleTagVi" name="txtTitleTagVi" class="form-control col-lg-6 maxlength-textarea" maxlength="70" placeholder="Please Enter Primary Keyword (SEO)" <?php issetInput('txtTitleTagVi') ?> />
							</div>
							<div class="form-group">
								<label class="control-label">Meta Keywords (Vi)</label>
								<input type="text" name="txtKeywordsVi" class="tags-input" placeholder="Please Enter Description Tag (SEO)" <?php issetInput('txtKeywordsVi') ?> />
								<span class="help-block">Keywords not more that 10 words</span>
							</div>
							<div class="form-group">
								<label class="control-label">Meta Description (Vi)</label>
								<textarea rows="3" name="txtMetaDescriptionVi" cols="3" maxlength="160" class="form-control maxlength-textarea" placeholder="Please Enter Description Tag (SEO)"><?php issetTextarea('txtMetaDescriptionVi') ?></textarea>
							</div>
						</div>

						<div class="tab-pane has-padding" id="english">
							<div class="form-group">
								<label class="control-label">Course Name (En)</label>
								<input type="text" id="name-slug-en" name="txtNameEn" class="form-control" placeholder="Please Enter Course Name" <?php issetInput('txtNameEn') ?> />
							</div>
							<div class="form-group">
								<label class="control-label">Fee (USD)</label>
								<input type="text" name="txtFeeEn" class="form-control" placeholder="Please Enter Fee" <?php issetInput('txtFeeEn') ?> />
							</div>
							<div class="form-group">
								<label class="control-label">Description (En)</label>
								<textarea name="txtDescriptionEn"><?php issetTextarea('txtDescriptionEn') ?></textarea>
								<script type="text/javascript">
									 CKEDITOR.replace('txtDescriptionEn', {
									 	height: '400px',
									 	extraPlugins: 'forms',
									 	filebrowserBrowseUrl: 'public/js/ckfinder/ckfinder.html',
									 	filebrowserUploadUrl: 'public/js/ckfinder/connector?command=QuickUpload&type=Files'
									 });
								</script>
							</div>
							<div class="form-group">
								<label class="control-label">Slug URL (En)</label>
								<input type="text" id="txtSlugEn" name="txtSlugEn" class="form-control" placeholder="Please Enter Slug URL" <?php issetInput('txtSlugEn') ?> />
							</div>
							<div class="form-group" style="margin-bottom: 50px">
								<label class="control-label">Title Tag (En) (Ex : Keyword Primary - Keyword Secondary)</label>
								<input type="text" id="txtTitleTagEn" name="txtTitleTagEn" class="form-control col-lg-6 maxlength-textarea" maxlength="70" placeholder="Please Enter Primary Keyword (SEO)" <?php issetInput('txtTitleTagEn') ?>  />
							</div>
							<div class="form-group">
								<label class="control-label">Meta Keywords (En)</label>
								<input type="text" name="txtKeywordsEn" class="tags-input" placeholder="Please Enter Description Tag (SEO)" <?php issetInput('txtKeywordsEn') ?> />
								<span class="help-block">Keywords not more that 10 words</span>
							</div>
							<div class="form-group">
								<label class="control-label">Meta Description (En)</label>
								<textarea rows="3" name="txtMetaDescriptionEn" cols="3" maxlength="160" class="form-control maxlength-textarea" placeholder="Please Enter Description Tag (SEO)"><?php issetTextarea('txtMeDescriptionEn') ?></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Add Course</h6>
				<div class="heading-elements">
					<ul class="icons-list">
	            		<li><a data-action="collapse" class=""></a></li>
	            		<li><a data-action="reload"></a></li>
	            		<li><a data-action="close"></a></li>
	            	</ul>
	        	</div>
			</div>

			<div class="panel-body" style="display: block;">
				<div class="form-group">
					<label class="control-label">Category</label>
					<div class="well" id="scroll-category">
						<?php 
						$data_category = data_category($conn);
						if (isset($_POST["chkCategory"])) {
						    echo "<pre>";
						    print_r($_POST["chkCategory"]);
						    echo "</pre>";
							recursionList ($data_category,$_POST["chkCategory"]);
						} else {
							recursionList ($data_category);
						} 
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label">Author</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="icon-user"></i></span>
						<input type="text" name="txtAuthor" class="form-control" placeholder="Please Enter Author Name" <?php issetInput('txtAuthor') ?> />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label">Level</label>
					<select name="sltLevel" class="form-control">
						<option value="Beginer" <?php issetSelect ('sltLevel','Beginer') ?>>Beginer</option>
						<option value="Intermediate" <?php issetSelect ('sltLevel','Intermediate') ?>>Intermediate</option>
						<option value="Expert" <?php issetSelect ('sltLevel','Expert') ?>>Expert</option>
						<option value="All Level" <?php issetSelect ('sltLevel','All Level') ?>>All Level</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Target Open</label>
					<select name="sltTarget" class="form-control">
						<option value="_self" <?php issetSelect ('sltTarget','_self') ?>>The same frame (_self)</option>
						<option value="_blank" <?php issetSelect ('sltTarget','_blank') ?>>New window or tab (_blank)</option>
						<option value="_parent" <?php issetSelect ('sltTarget','_parent') ?>>The parent frame (_parent)</option>
						<option value="_top" <?php issetSelect ('sltTarget','_top') ?>>The full body of the window (_top)</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Meta Robot</label>
					<select name="sltMetaRobot" class="form-control">
						<option value="noindex, follow" <?php issetSelect ('sltMetaRobot','noindex, follow') ?>>NOINDEX, FOLLOW</option>
						<option value="index, nofollow" <?php issetSelect ('sltMetaRobot','index, nofollow') ?>>INDEX, NOFOLLOW</option>
						<option value="noindex, nofollow" <?php issetSelect ('sltMetaRobot','noindex, nofollow') ?>>NOINDEX, NOFOLLOW</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Main Image</label><br />
					<center>
						<img class="img-responsive" id="main-image" <?php issetInputImage ('txtImage') ?> />
						<input type="hidden" name="txtImage" id="main-image-input" <?php issetInput('txtImage','public/images/upload.png') ?> />
					</center><br />
					<input type="text" name="txtAlt" class="form-control" placeholder="Please Enter Alt For Image" <?php issetInput ('txtAlt') ?>  />
				</div><br />
				<div class="checkbox checkbox-switch">
					<input name="chkStatus" type="checkbox" data-on-color="success" data-off-color="danger" data-on-text="Status Online" data-off-text="Status Offline" class="switch" checked="checked" />
				</div>
				<div class="checkbox checkbox-switch">
					<input name="chkFeatured" type="checkbox" data-on-color="success" data-off-color="danger" data-on-text="Featured On" data-off-text="Featured Off" class="switch"/>
				</div>
			</div>
		</div>
	</div>
</form>