<?php

require_once("../db/Connection.php");

class Employee
{

    public function insert($name, $birth_date, $occupation)
    {

        $insert_query = 'INSERT INTO employees (`name`, `birth_date`, `occupation`)
        VALUES("' . $name . '","' . $birth_date . '","' . $occupation . '")';

        $Connection = new Connection();

        $Connection->connect();

        $Connection->query($insert_query);
    }

    public function find($sql)
    {

        $Connection = new Connection();

        $Connection->connect();

        $Connection->query($sql);

        $this->row = @mysqli_affected_rows($Connection->result);

        $this->result = $Connection->result;
    }

    public function delete($id)
    {

        $delete_query = 'DELETE FROM employees WHERE id="' . $id . '"';

        $Connection = new Connection();

        $Connection->connect();

        $Connection->query($delete_query);
    }

    public function update($name, $birth_date, $occupation, $id)
    {

        $update_query = 'UDPATE employees SET name ="' . $name . '", birth_date="' . $birth_date . '" , occupation="' . $occupation . '" WHERE id="' . $id . '"';

        $Connection = new Connection();

        $Connection->connect();

        $Connection->query($update_query);

        $this->row = mysqli_num_rows($Connection->result);

        $this->result = $Connection->result;
    }
}
