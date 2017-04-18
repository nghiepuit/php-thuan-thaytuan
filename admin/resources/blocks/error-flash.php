<?php if (hasFlash("error")) { ?>
<div class="alert alert-danger alert-styled-left alert-arrow-left alert-bordered">
	<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
	<span class="text-semibold">Warining !! </span> <?php getFlash("error") ?>
</div>
<?php } ?>	