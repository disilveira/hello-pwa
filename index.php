<!doctype html>
<html lang="en">
	<?php require_once('includes/head.php'); ?>
<body>
	<?php require_once('includes/nav.php'); ?>

	<div class="container-fluid">
		<?php 
			if(isset($_GET['v'])){
				require_once('views/'.$_GET['v'].'.php');
			}else{
				require_once('views/kilometragem.php');
			}
		?>
	</div>
	<?php require_once('includes/footer.php'); ?>
</body>
</html>