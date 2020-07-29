<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Funcionários</title>
</head>

<body>
    <?php
    include_once('navbar.html');
    require_once('../controller/EmployeeController.php');
    process('find')
    ?>
    <div class="container">
        <h3 class="text-center my-3">Funcionários</h3>
        <table class="table">
            <thead class="text-center thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Função</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tbody class="text-center">
                    <tr>
                        <td> <?php echo $row['id']; ?> </td>
                        <td> <?php echo $row['name']; ?> </td>
                        <td> <?php echo $row['birth_date']; ?> </td>
                        <td> <?php echo $row['occupation']; ?> </td>
                        <td><a href="update.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-primary">Editar</button></a></td>
                        <td><a href="consult.php?ok=delete&id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger">Excluir</button></a></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>
</body>

</html>