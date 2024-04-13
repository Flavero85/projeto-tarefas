<?php
/*
Identificar  qual tarefa eu cliquei
mudança do status de 0 para 1
    - conectar no bd
    - montar sql de update
    - executar o update no bd
    - redicionar para index (dashboard)
*/

$id = $_GET["id"];
include "conexao.php";
$sql = "update tarefas set status=1 where id = $id";
$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: index.php");
?>