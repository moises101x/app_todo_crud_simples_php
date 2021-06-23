<?php 

$id = $_GET['id'];

include('conexaodb.php');

$query = "DELETE FROM tarefas_table WHERE tarefa_id='$id'";

if ($db->exec($query)) {
    header('location: index.php');
    exit;
} else{
    echo "error";
}
