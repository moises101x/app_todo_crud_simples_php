<?php

include('conexaodb.php');

$tarefa_descricao = $_POST['tarefa'];

$query = "INSERT INTO tarefas_table(tarefa_descricao) VALUES('$tarefa_descricao')";

if ($db->exec($query)) {
   header('location: index.php');
   exit;
} else{
    echo "erro ao inserir a tarefa";
} 

?>