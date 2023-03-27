<?php


class Database
{
    public $connection;

    // automatic connection to database method
    function __construct()
    {
        $this->db_connection();
    }


    // connection to database method
    public function db_connection()
    {
        $this->connection = new mysqli('localhost', 'root', 'root', 'products', 8889);

        if ($this->connection->connect_errno) {
            die("Database connection failed!" . $this->connection->connect_error);
        }
    }


    // query method
    public function query($sql)
    {
        $result = $this->connection->query($sql);

        $this->confirm_query($result);

        return $result;
    }

    // method to confirm query
    public function confirm_query($result)
    {
        if (!$result) {
            // die();
            die("Query failed!" . $this->connection->error);
        }

        // header("Location: add_product.php");
        // exit();
    }
}

$data = new Database;
