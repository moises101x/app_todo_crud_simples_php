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

    $query = "SELECT * FROM tarefas_table";

    $resultado  = $db->query($query);
    ?>
    <div class="container">

        <div class="row" style="margin-top: 10px;">
            <div class="col-sm-4">
                <form action="inserir.php" method="post">
                    <div class="form-group">
                        <label for="tarefa">Tarefa:</label>
                        <input type="text" class="form-control" placeholder="Escreva a tarefa aqui..." name="tarefa">
                    </div>
                    <div style="margin-top: 10px;">
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-8">
                <div class="container">
                    <h2>Tarefas Cadastradas:</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Titulo da tarefa</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            while ($row = $resultado->fetchArray()) {
                            ?>
                                <tr>
                                    <td><?php echo $row['tarefa_descricao']; ?></td>
                                    <td>
                                     <a href="editar.php?id=<?php echo $row['tarefa_id'] ?>" class="btn btn-info" role="button">Editar</a>
                                     <a href="deletar.php?id=<?php echo $row['tarefa_id'];?>" class="btn btn-success" role="button">Feito</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>