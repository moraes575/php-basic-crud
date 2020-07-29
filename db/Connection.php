<?php

const SERVER = "localhost";
const USER = "root";
const PASSWORD = "";
const DATABASE_NAME = "company";

class DatabaseAccess
{

    public function connect()
    {

        $this->connection = mysqli_connect(SERVER, USER, PASSWORD, DATABASE_NAME);

        if (mysqli_connect_errno()) {
            echo "Failed to connect to database: " . mysqli_connect_error();
        }
    }

    public function query($sql)
    {
        $this->result = mysqli_query($this->connection, $sql, MYSQLI_STORE_RESULT);
    }

    public function destruct()
    {
        mysqli_close($this->connection);
    }
}
