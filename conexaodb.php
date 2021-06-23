<?php

$dbname = "tarefas.db";

$db = new SQLite3($dbname);

if (!$db) {
    die("o banco não foi criado");
}

//criar tabela
$query = "CREATE TABLE IF NOT EXISTS tarefas_table(tarefa_id integer primary key, tarefa_descricao text)";

$db->exec($query);

?>