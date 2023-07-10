<?php

$hostname = "localhost";
$database = "tarefas";
$usuario = "root";
$password = "";

$mysqli = new mysqli($hostname, $usuario, $password, $database);

// Verifica se a conexão foi estabelecida com sucesso
if ($mysqli->connect_error) {
    die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
}