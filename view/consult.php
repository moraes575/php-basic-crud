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
    include_once('navbar.php');
    ?>
    <div class="container">
        <h3 class="text-center my-3">Funcionários</h3>
        <table class="table table-striped">
            <thead class="text-center">
                <td><b>ID</b></td>
                <td><b>Nome</b></td>
                <td><b>Data de Nascimento</b></td>
                <td><b>Função</b></td>
            </thead>
        </table>
    </div>
</body>

</html>