<?php
include('conexão.php');

$taskName = $_POST['task_name'];


// Deletar a tarefa
$sql = "DELETE FROM tarefas WHERE nome = '$taskName'";

if ($mysqli->query($sql) === TRUE) {
    echo "Tarefa excluída com sucesso!";
} else {
    echo "Erro ao excluir a tarefa: " . $mysqli->error;
}

$mysqli->close();
?>

<a href="index.php"><button>Voltar para o início</button></a>
<a href="index2.php"><button>Adicionar uma nova tarefa</button></a>
  <a href="index3.php"><button>Visualizar suas tarefas</button></a>