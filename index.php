
<!DOCTYPE html>
<html>
<head>
    <title>Gerenciador de tarefas - início</title>

    <style> 
    .text {
        display: flex;
  justify-content: center; /* Centraliza horizontalmente */
  align-items: center; /* Centraliza verticalmente */
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
    <h1 class = text>Olá! seja bem vindo ao seu Gerenciador de Tarefas</h1> 
    
    <h2 class = text>O que você gostaria de fazer?</h2>

    
    <a class = button1 href="index2.php"><button>Adicionar uma nova tarefa</button></a>  
    <a class = button2 href="index3.php"><button>Visualizar suas tarefas</button></a> 
    
</body>
</html>
