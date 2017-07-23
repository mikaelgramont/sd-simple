<style>
	.vrview-wrapper {
		width: 100%;
		height: 0;
		padding-top: 56.25%;
		position: relative;
	}
	.vrview {
		border: 0;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
	}
</style>
<div class="vrview-wrapper">
	<iframe class="vrview" allowfullscreen="true" src="<?php echo BASE_URL?>vrview.html?image=<?php echo BASE_URL?>images/kicker.jpg"></iframe>
</div>