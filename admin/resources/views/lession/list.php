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
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h5 class="panel-title">List Lession</h5>
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
					<th>Lession Name</th>
					<th>Course</th>
					<th>Status</th>
					<th class="text-center" width="70px">Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td><a href="index.php?con=lession&act=edit&cid=1">Bài 1 : Tìm hiểu biến và hằng số </a></td>
					<td><a href="index.php?con=course&act=edit&cid=1">Lập Trình PHP Căn Bản</a></td>
					<td><input type="checkbox" name="chkStatus" data-on-color="success" data-off-color="danger" data-on-text="On" data-off-text="Off" class="switch" data-id="1" /></td>
					<td class="text-center">
						<ul class="icons-list">
							<li class="text-primary-600"><a href="index.php?con=lession&act=edit&cid=1" data-popup="tooltip" title="Edit"><i class="icon-pencil7"></i></a></li>
							<li class="text-danger-600"><a href="index.php?con=lession&act=delete&cid=1" data-popup="tooltip" title="Remove" class="sweet_warning"><i class="icon-trash"></i></a></li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><a href="index.php?con=lession&act=edit&cid=1">Bài 2 : Mệnh đề điều kiện trong PHP </a></td>
					<td><a href="index.php?con=course&act=edit&cid=1">Lập Trình PHP Căn Bản</a></td>
					<td><input type="checkbox" name="chkStatus" data-on-color="success" data-off-color="danger" data-on-text="On" data-off-text="Off" class="switch" data-id="1" /></td>					<td class="text-center">
						<ul class="icons-list">
							<li class="text-primary-600"><a href="index.php?con=lession&act=edit&cid=1" data-popup="tooltip" title="Edit"><i class="icon-pencil7"></i></a></li>
							<li class="text-danger-600"><a href="index.php?con=lession&act=delete&cid=1" data-popup="tooltip" title="Remove" class="sweet_warning"><i class="icon-trash"></i></a></li>
						</ul>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>