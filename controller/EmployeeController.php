<?php
require_once("../model/Employee.php");

function process($process)
{

    switch ($process) {

        case 'insert':

            global $row;
            global $result;

            $employee = new Employee();

            $employee->find("SELECT * FROM employees");
            $row = $employee->row;
            $result = $employee->result;

            if (isset(($_POST['ok'])) == 'true') {
                $employee->insert($_POST['name'], $_POST['birth-date'], $_POST['occupation']);
                echo '<script>alert("Funcionário cadastrado com sucesso!");</script>';
                echo '<script>window.location="index.php";</script>';
            }

            break;

        case 'find':

            global $row;
            global $result;

            $employee = new Employee();

            $employee->find("SELECT * FROM employees");
            $row = $employee->row;
            $result = $employee->result;

            if ($_GET['ok'] == "delete") {
                $employee->delete($_GET['id']);
                echo '<script>alert("Funcionário excluído com sucesso!");</script>';
                echo '<script>window.location="consult.php";</script>';
            }

            break;

        case 'update':

            global $row;
            global $result;

            $employee = new Employee();

            $employee->find("SELECT * FROM employees WHERE id=" . $_GET['id']);
            $row = $employee->row;
            $result = $employee->result;

            if ($_POST['ok'] == "true") {
                $employee->update($_POST['name'], $_POST['birth-date'], $_POST['occupation'], $_GET['id']);
                echo '<script>alert("Funcionário atualizado com sucesso!");</script>';
                echo '<script>window.location="consult.php";</script>';
            }

            break;
    }
}
