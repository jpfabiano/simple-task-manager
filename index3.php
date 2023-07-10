<!DOCTYPE html>
<html>
<head>
  <title class = text>Gerenciador de Tarefas - visualizar</title>
  <style>
  .text{ 
    font-family : Arial;
  }
  .button1{ 
        position: absolute;
        bottom: 0;
        right: 0;
        margin-right: 160px;
        width: 200px; /* Define a largura do botão */
        height: 50px; /* Define a altura do botão */
        padding: 100; /* Remova o espaçamento interno */
        margin: 100; /* Remova a margem */
    }
    .button2{ 
        position: absolute;
        bottom: 0;
        right: 0;
        margin-right: 0px;
        width: 180px; /* Define a largura do botão */
        height: 50px; /* Define a altura do botão */
        padding: 100; /* Remova o espaçamento interno */
        margin: 100; /* Remova a margem */
    }
  </style>

</head>

<body>
  <h1 class = text>Estas são suas tarefas pendentes : </h1>
  <?php
include('conexão.php');

// Consulta SQL para selecionar os dados da tabela
$sql = "SELECT nome, statu , importancia FROM tarefas";
$result = $mysqli->query($sql);

// Verifica se há registros retornados
if ($result->num_rows > 0) {
  // Criar uma tabela para exibir os dados
  echo "<table>";
  echo "<tr><th>Nome</th><th>Importância</th></tr>";

  // Loop pelos registros e exibição dos dados
  $tasks = array();
  while ($row = $result->fetch_assoc()) {
      $tasks[] = $row;
  }

  // Ordenar as tarefas por importância
  usort($tasks, function($a, $b) {
      return $b['importancia'] - $a['importancia'];
  });

  // Exibir as tarefas na tabela
  foreach ($tasks as $task) {
      echo "<tr>";
      echo "<td>" . $task["nome"] . "</td>";
      echo "<td>" . $task["importancia"] . "</td>";
      echo "</tr>";
  }

  echo "</table>";
} else {
  echo "Nenhum resultado encontrado.";
}


// Fecha a conexão com o banco de dados
$mysqli->close();

?>

<form action="deletar_tarefa.php" method="POST">
        <label for="task_name">Tarefa Concluída:</label>
        <input type="text" name="task_name" id="task_name" required autocomplete="off">
        <button type="submit">Deletar Tarefa</button>
    </form>

  <a class = button2 href="index.php"><button>Voltar para o início</button></a>
  <a class = button1 href="index2.php"><button>Adicionar uma nova tarefa</button></a>
  
  


</body>
</html>
