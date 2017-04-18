<div class="col-md-12">
	<?php include 'resources/blocks/error.php'; ?>
	<?php include 'resources/blocks/error-flash.php'; ?>
	<?php include 'resources/blocks/success.php'; ?>
</div>
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h5 class="panel-title">List User</h5>
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
					<th>Email</th>
					<th>Full Name</th>
					<th>Level</th>
					<th>Status</th>
					<th class="text-center" width="70px">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$data = listUser ($conn);
				$stt = 0;
				foreach ($data as $item) {
					$stt = $stt + 1;
				?>
				<tr>
					<td><?php echo $stt; ?></td>
					<td><a href="index.php?con=user&act=edit&cid=<?php echo $item["id"]; ?>"><?php echo $item["email"]; ?> </a></td>
					<td><?php echo $item["firstname"] . " " . $item["lastname"]; ?> </td>
					<?php 
					if ($item["id"] == 1) {
						echo '<td class="text-danger">Superadmin</td>';
					} elseif ($item["level"] == 1) {
						echo '<td class="text-muted">Member</td>';
					} elseif ($item["level"] == 2) {
						echo '<td class="text-success">Member Vip</td>';
					} else {
						echo '<td class="text-primary">Admin</td>';
					}
					?>
					
					<td><input type="checkbox" name="chkStatus" data-on-color="success" data-off-color="danger" data-on-text="On" data-off-text="Off" class="switch" data-table="u8tr_user" data-col="status" data-id="<?php echo $item["id"] ?>" <?php echo ($item["status"] == "On") ? "checked" : "" ?> /></td>
					<td class="text-center">
						<ul class="icons-list">
							<li class="text-primary-600"><a href="index.php?con=user&act=edit&cid=<?php echo $item["id"]; ?>" data-popup="tooltip" title="Edit"><i class="icon-pencil7"></i></a></li>
							<li class="text-danger-600"><a href="index.php?con=user&act=delete&cid=<?php echo $item["id"]; ?>" data-popup="tooltip" title="Remove" class="sweet_warning"><i class="icon-trash"></i></a></li>
						</ul>
					</td>
				</tr>
				<?php } ?>
				
			</tbody>
		</table>
	</div>
</div>