<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>CRUD Básico</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center my-3">Painel de Controle</h3>
        <h4 class="my-3">Dados de cadastro</h4>
        <form method="POST" action="../process.php">
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
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>