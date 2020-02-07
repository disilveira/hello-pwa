<?php
require_once('controllers/KilometragemController.php');
?>

<h4>Meus Registros</h4>
<p><i>Lista de KM's enviados</i></p>
<table class="display responsive nowrap table table-striped table-sm" style="width:100%">
    <thead class="thead-light">
        <tr>
            <th>Motorista</th>
            <th>KM</th>
        </tr>
    </thead>
    <tbody>
        <?php echo KilometragemController::showTableKM(); ?>
    </tbody>
</table>