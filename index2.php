<!DOCTYPE html>
<html>
<head>
  <title>Gerenciador de tarefas - adicionar</title>

  <style>
    .text{
      font-family: Arial;
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
  <h1 class = text>Adicione uma tarefa : </h1>

  <form action="salvar_tarefa.php" method="POST">
  <!-- campo adicionar tarefa -->
  <input type="text" name="nome_tarefa" placeholder="Digite a tarefa" required autocomplete="off">
  
  <!-- campo importancia -->
  <select name="importancia" placeholder="Grau de importância">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
  
  <input type="submit" value="Salvar">
</form>


    

  <a class = button2 href="index.php"><button>Voltar para o início</button></a>
  
  <a class = button1 href="index3.php"><button>Visualizar suas tarefas</button></a>

</body>
</html>
