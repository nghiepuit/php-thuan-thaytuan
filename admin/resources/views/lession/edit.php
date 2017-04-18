<form action="" method="POST" accept-charset="utf-8">
	<div class="col-md-12">
		<div class="panel panel-body border-top-primary text-left">
			<button type="submit" name="btnSaveNew" value="btnSaveNew" class="btn btn-success btn-labeled"><b><i class="icon-add"></i></b> Save & New</button>
			<button type="submit" name="btnSaveClose" value="btnSaveClose" class="btn btn-default btn-labeled"><b><i class="icon-add-to-list"></i></b> Save & Close</button>
			<a href="index.php?con=lession" class="btn btn-danger btn-labeled"><b><i class="icon-close2"></i></b> Close</a>
		</div>
	</div>
	<div class="col-md-12">
		<div class="alert alert-danger alert-styled-left alert-bordered">
			<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
			<span class="text-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
		</div>

		<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
			<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
			<span class="text-semibold">Well done!</span> You successfully read <a href="#" class="alert-link">this important</a> alert message.
	    </div>
	</div>
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Edit Lession</h6>
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
								<label class="control-label">Lession Name (Vi)</label>
								<input type="text" id="name-slug-vi" name="txtNameVi" class="form-control" placeholder="Please Enter Lession Name" />
							</div>
							<div class="form-group">
								<label class="control-label">Open Content (Vi)</label>
								<textarea name="txtOpenContentVi"></textarea>
								<script type="text/javascript">
									 CKEDITOR.replace('txtOpenContentVi', {
									 	height: '200px',
									 	extraPlugins: 'forms',
									 	filebrowserBrowseUrl: 'public/js/ckfinder/ckfinder.html',
									 	filebrowserUploadUrl: 'public/js/ckfinder/connector?command=QuickUpload&type=Files'
									 });
								</script>
							</div>
							<div class="form-group">
								<label class="control-label">Body Content (Vi)</label>
								<textarea name="txtBodyConentVi"></textarea>
								<script type="text/javascript">
									 CKEDITOR.replace('txtBodyConentVi', {
									 	height: '400px',
									 	extraPlugins: 'forms',
									 	filebrowserBrowseUrl: 'public/js/ckfinder/ckfinder.html',
									 	filebrowserUploadUrl: 'public/js/ckfinder/connector?command=QuickUpload&type=Files'
									 });
								</script>
							</div>
							<div class="form-group">
								<label class="control-label">Foot Content (Vi)</label>
								<textarea name="txtFootContentVi"></textarea>
								<script type="text/javascript">
									 CKEDITOR.replace('txtFootContentVi', {
									 	height: '200px',
									 	extraPlugins: 'forms',
									 	filebrowserBrowseUrl: 'public/js/ckfinder/ckfinder.html',
									 	filebrowserUploadUrl: 'public/js/ckfinder/connector?command=QuickUpload&type=Files'
									 });
								</script>
							</div>
							<div class="form-group">
								<label class="control-label">Slug URL (Vi)</label>
								<input type="text" id="txtSlugVi" name="txtSlug" class="form-control" placeholder="Please Enter Slug URL" />
							</div>
							<div class="form-group" style="margin-bottom: 50px">
								<label class="control-label">Title Tag (Vi) (Ex : Keyword Primary - Keyword Secondary)</label>
								<input type="text" id="txtTitleTagVi" name="txtTitleTag" class="form-control col-lg-6 maxlength-textarea" maxlength="70" placeholder="Please Enter Primary Keyword (SEO)" />
							</div>
							<div class="form-group">
								<label class="control-label">Meta Keywords (Vi)</label>
								<input type="text" name="txtKeywordsVi" class="tags-input" placeholder="Please Enter Description Tag (SEO)" />
								<span class="help-block">Keywords not more that 10 words</span>
							</div>
							<div class="form-group">
								<label class="control-label">Meta Description (Vi)</label>
								<textarea rows="3" name="txtDescriptionVi" cols="3" maxlength="160" class="form-control maxlength-textarea" placeholder="Please Enter Description Tag (SEO)"></textarea>
							</div>
						</div>

						<div class="tab-pane has-padding" id="english">
							<div class="form-group">
								<label class="control-label">Lession Name (En)</label>
								<input type="text" id="name-slug-en" name="txtNameEn" class="form-control" placeholder="Please Enter Lession Name" />
							</div>
							<div class="form-group">
								<label class="control-label">Open Content (En)</label>
								<textarea name="txtOpenContentEn"></textarea>
								<script type="text/javascript">
									 CKEDITOR.replace('txtOpenContentEn', {
									 	height: '200px',
									 	extraPlugins: 'forms',
									 	filebrowserBrowseUrl: 'public/js/ckfinder/ckfinder.html',
									 	filebrowserUploadUrl: 'public/js/ckfinder/connector?command=QuickUpload&type=Files'
									 });
								</script>
							</div>
							<div class="form-group">
								<label class="control-label">Body Content (Vi)</label>
								<textarea name="txtBodyConentEn"></textarea>
								<script type="text/javascript">
									 CKEDITOR.replace('txtBodyConentEn', {
									 	height: '400px',
									 	extraPlugins: 'forms',
									 	filebrowserBrowseUrl: 'public/js/ckfinder/ckfinder.html',
									 	filebrowserUploadUrl: 'public/js/ckfinder/connector?command=QuickUpload&type=Files'
									 });
								</script>
							</div>
							<div class="form-group">
								<label class="control-label">Foot Content (En)</label>
								<textarea name="txtFootContentEn"></textarea>
								<script type="text/javascript">
									 CKEDITOR.replace('txtFootContentEn', {
									 	height: '200px',
									 	extraPlugins: 'forms',
									 	filebrowserBrowseUrl: 'public/js/ckfinder/ckfinder.html',
									 	filebrowserUploadUrl: 'public/js/ckfinder/connector?command=QuickUpload&type=Files'
									 });
								</script>
							</div>
							<div class="form-group">
								<label class="control-label">Slug URL (En)</label>
								<input type="text" id="txtSlugEn" name="txtSlug" class="form-control" placeholder="Please Enter Slug URL" />
							</div>
							<div class="form-group" style="margin-bottom: 50px">
								<label class="control-label">Title Tag (En) (Ex : Keyword Primary - Keyword Secondary)</label>
								<input type="text" id="txtTitleTagEn" name="txtTitleTag" class="form-control col-lg-6 maxlength-textarea" maxlength="70" placeholder="Please Enter Primary Keyword (SEO)" />
							</div>
							<div class="form-group">
								<label class="control-label">Meta Keywords (En)</label>
								<input type="text" name="txtKeywordsEn" class="tags-input" placeholder="Please Enter Description Tag (SEO)" />
								<span class="help-block">Keywords not more that 10 words</span>
							</div>
							<div class="form-group">
								<label class="control-label">Meta Description (En)</label>
								<textarea rows="3" name="txtDescriptionEn" cols="3" maxlength="160" class="form-control maxlength-textarea" placeholder="Please Enter Description Tag (SEO)"></textarea>
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
				<h6 class="panel-title">Edit Lession</h6>
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
					<label class="control-label">Category Parent</label>
					<select name="sltParent" class="form-control">
						<option value="0">---------------- ROOT ----------------</option>
						<option value="1">---| Trang Chủ</option>
						<option value="2">---| Khóa Học</option>
						<option value="2">---|---| Lập Trình PHP</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Course</label>
					<select name="sltCourse" class="form-control">
						<option value="1">PHP Cơ Bản</option>
						<option value="2">PHP Nâng Cao</option>
						<option value="3">Laravel Framework 5</option>
						<option value="4">Zend Framework 2 </option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Youtube</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="icon-link"></i></span>
						<input type="text" name="txtYoutube" class="form-control" placeholder="Please Enter Link Youtube" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label">Access</label>
					<select name="sltAccess" class="form-control">
						<option value="0">Guest</option>
						<option value="1">Member</option>
						<option value="2">Member Vip</option>
						<option value="3">Admin</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Target Open</label>
					<select name="sltTarget" class="form-control">
						<option value="_self">The same frame (_self)</option>
						<option value="_blank">New window or tab (_blank)</option>
						<option value="_parent">The parent frame (_parent)</option>
						<option value="_top">The full body of the window (_top)</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Meta Robot</label>
					<select name="sltTarget" class="form-control">
						<option value="noindex, follow">NOINDEX, FOLLOW</option>
						<option value="index, nofollow">INDEX, NOFOLLOW</option>
						<option value="noindex, nofollow">NOINDEX, NOFOLLOW</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Main Image</label><br />
					<center>
						<img class="img-responsive" id="main-image" src="public/images/upload.png" />
						<input type="hidden" name="txtImage" id="main-image-input" />
					</center><br />
					<input type="text" name="txtAlt" class="form-control" placeholder="Please Enter Alt For Image" />
				</div><br />
				<div class="form-group">
					<label class="control-label">Source</label><br />
					<input type="text" name="txtSource" id="txtSource" class="form-control" placeholder="Please Enter Alt For Image" />
				</div><br />
				<div class="checkbox checkbox-switch">
					<input type="checkbox" data-on-color="success" data-off-color="danger" data-on-text="Status Online" data-off-text="Status Offline" class="switch" checked="checked" />
				</div>
				<div class="checkbox checkbox-switch">
					<input type="checkbox" data-on-color="success" data-off-color="danger" data-on-text="Featured On" data-off-text="Featured Off" class="switch"/>
				</div>
			</div>
		</div>
	</div>
</form>