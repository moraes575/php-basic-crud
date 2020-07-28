<?php

session_start();
include_once("connection.php");

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$birth_date = filter_input(INPUT_POST, 'birth-date');
$occupation = filter_input(INPUT_POST, 'occupation', FILTER_SANITIZE_STRING);

$insert_employee = "INSERT INTO employees (`name`, `birth_date`, `occupation`) VALUES 
('$name', '$birth_date', '$occupation')";

$execute_query = mysqli_query($connection, $insert_employee);

if (mysqli_insert_id($connection)) {
    $_SESSION['msg'] = "<p>Funcionário cadastrado com sucesso!</p>";
    header("Location: view/index.php");
} else {
    $_SESSION['msg'] = "<p>Erro ao cadastrar funcionário!</p>";
    header("Location: view/index.php");
}
