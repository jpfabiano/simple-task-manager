<?php
include('conexão.php');

$nome_tarefa = $_POST['nome_tarefa'];
$importancia = $_POST['importancia'];


// Verifica se a importancia está entre 1 e 5
if ($importancia < 1 || $importancia > 5) {
    echo "A importância deve estar entre 1 e 5.";
    exit;
}

// Insere a tarefa no banco de dados
$sql = "INSERT INTO tarefas (nome, statu, importancia) VALUES ('$nome_tarefa', 'Pendente', '$importancia')";

if ($mysqli->query($sql) === TRUE) {
    echo "Tarefa salva com sucesso!";
} else {
    echo "Erro ao salvar a tarefa: " . $mysqli->error;
}


// Fecha a conexão com o banco de dados
$mysqli->close();
?>

<a href="index.php"><button>Voltar para o início</button></a>
<a href="index2.php"><button>Adicionar uma nova tarefa</button></a>
  <a href="index3.php"><button>Visualizar suas tarefas</button></a>
