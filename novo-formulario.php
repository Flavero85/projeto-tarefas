<?php include "cabecalho.php"; ?>

<h2>Cadastrar uma nova tarefa</h2>
<form method="post" action="novo-salvar.php">
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" required maxlength="100">
    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao"></textarea>
    <button type="submit" class="btn btn-success">Salvar nova Tarefa</button>
</form>

<?php include "rodape.php"; ?>