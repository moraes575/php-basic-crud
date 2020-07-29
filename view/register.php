<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>
    <?php
    include_once('navbar.html');
    require_once('../controller/EmployeeController.php');
    process('insert');
    ?>
    <div class="container">
        <h3 class="text-center my-3">Cadastro de Funcionário</h3>
        <h4 class="my-3">Dados de cadastro</h4>
        <form method="POST">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control mb-3" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="birth-date">Data de Nascimento</label>
                <input type="date" class="form-control mb-3" name="birth-date" id="birth-date" required>
            </div>
            <div class="form-group">
                <label for="occupation">Função</label>
                <input type="occupation" class="form-control mb-3" name="occupation" id="occupation" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <input type="hidden" name="ok" id="ok">
            </div>
        </form>
    </div>
</body>

</html>