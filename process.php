<?php

include_once("connection.php");

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$birth_date = filter_input(INPUT_POST, 'birth-date');
$occupation = filter_input(INPUT_POST, 'occupation', FILTER_SANITIZE_STRING);

$insert_employee = "INSERT INTO employees (`name`, `birth_date`, `occupation`) VALUES 
('$name', '$birth_date', '$occupation')";

$execute_query = mysqli_query($connection, $insert_employee);
