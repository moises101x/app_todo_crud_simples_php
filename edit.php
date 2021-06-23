<?php

include('conexaodb.php');

$id = $_POST['id'];
$tarefa_descricao = $_POST['tarefa']; 

$query = "UPDATE tarefas_table SET tarefa_descricao = '$tarefa_descricao' WHERE tarefa_id='$id'";

if ($db->exec($query)) {
    header('location: index.php');
    exit;
} else{
    echo "não foi possivel editar";
}