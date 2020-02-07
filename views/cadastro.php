<h4>Cadastro</h4>
<p><i>Cadastro de novo registro</i></p>
<form method="POST" action="controllers/KilometragemController.php?funcao=cadastroKM">
    <div class="form-group">
        <label for="nome_motorista">Nome:</label>
        <input type="text" name="nome_motorista" id="nome_motorista" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="km">KM:</label>
        <input type="number" name="km" id="km" class="form-control" pattern="\d*" required>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>