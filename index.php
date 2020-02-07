<!doctype html>
<html lang="en">
<?php require_once('includes/head.php'); ?>

<body>
	<?php require_once('includes/nav.php'); ?>

	<div class="container-fluid">

		<?php if (isset($_GET['return']) && $_GET['return'] == 1) {
			echo '
			<div class="alert alert-success alert-dismissible" style="margin-top: 67px">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Successo!</strong> Os dados foram enviados com sucesso.
			</div>';
		}
		?>

		<?php
		if (isset($_GET['v'])) {
			require_once('views/' . $_GET['v'] . '.php');
		} else {
			require_once('views/kilometragem.php');
		}
		?>
	</div>
	<?php require_once('includes/footer.php'); ?>
	<script>
		$(document).ready(function() {
			$('.table').DataTable({
				"ordering": false,
				responsive: true,
				"language": {
					"lengthMenu": "Mostrar _MENU_ ",
					"zeroRecords": "Desculpe, nenhum registro foi encontrado",
					"info": "Página _PAGE_ de _PAGES_",
					"infoEmpty": "",
					"infoFiltered": "_MAX_ registros",
					"loadingRecords": "Carregando...",
					"processing": "Buscando...",
					"search": "",
					"searchPlaceholder": "Buscar",
					"paginate": {
						"first": 'Primeira',
						"last": "Última",
						"next": "<i class='fas fa-chevron-right'></i>",
						"previous": "<i class='fas fa-chevron-left'></i>"
					}
				},
				conditionalPaging: true,
				bLengthChange: false,
				"order": [],
				"info": false,
				iDisplayLength: 10,
			});
			$('div.dataTables_filter input').addClass('form-control').removeClass('form-control-sm');
		});
	</script>
</body>

</html>