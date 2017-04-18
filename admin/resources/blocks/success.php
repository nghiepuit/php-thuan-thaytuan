<?php if (hasFlash("success")) { ?>
<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
	<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
	<span class="text-semibold">Well done!</span> <?php getFlash("success") ?>
</div>
<?php } ?>	