<?php
require_once('controllers/KilometragemController.php');
?>

<h4 style="margin-top: 67px">Meus Registros</h4>
<p><i>Lista de KM's enviados</i></p>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Motorista</th>
            <th>KM</th>
        </tr>
    </thead>
    <tbody>
        <?php echo KilometragemController::showTableKM(); ?>
    </tbody>
</table>