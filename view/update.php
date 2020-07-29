<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Atualizar</title>
</head>

<body>
    <?php
    include_once('navbar.html');
    require_once('../controller/EmployeeController.php');
    process('update')
    ?>
    <div class="container">
        <form method="POST">
            <h4 class="my-3">Atualizar dados</h4>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $row['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="birth-date">Data de Nascimento</label>
                    <input type="date" id="birth-date" name="birth-date" class="form-control" value="<?php echo $row['birth_date']; ?>">
                </div>
                <div class="form-group">
                    <label for="occupation">Função</label>
                    <input type="text" id="occupation" name="occupation" class="form-control" value="<?php echo $row['occupation']; ?>">
                </div>
            <?php } ?>
            <div class="form-group">
                <div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                    <input type="hidden" name="ok" id="ok">
                </div>
            </div>
        </form>
    </div>
</body>

</html>