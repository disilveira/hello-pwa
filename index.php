<!doctype html>
<html lang="en">
	<?php require_once('head.php'); ?>
<body>
	<?php require_once('nav.php'); ?>

	<div class="container-fluid">
		<?php 
			if(isset($_GET['v'])){
				require_once($_GET['v'].'.php');
			}else{
				require_once('home.php');
			}
		?>
	</div>

	<?php require_once('footer.php'); ?>
</body>
</html>