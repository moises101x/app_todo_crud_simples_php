<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TO-do!</title>
</head>

<body>

    <?php

    include('conexaodb.php');
    $id = $_GET['id'];
    

    $query = "SELECT * FROM tarefas_table WHERE tarefa_id='$id'";
    $res = $db->query($query);

    ?>

    <form action="edit.php" method="post">

        <?php
        while ($row = $res->fetchArray()) {
        ?>
        <input type="hidden" name="id" value="<?php echo $row['tarefa_id']; ?>">
            <div class="form-group">
                <label for="tarefa">Tarefa:</label>
                <input type="text" class="form-control" name="tarefa" value="<?php echo $row['tarefa_descricao']; ?>">

            <?php
        }
            ?>
            </div>
            <div style="margin-top: 10px;">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
    </form>


    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>