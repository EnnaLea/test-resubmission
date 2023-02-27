<?php

include_once("init.php");

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
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

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
            die("Query failed!" . $this->connection->error);
        }
    }

    // to clean string
    public function escape_string($string)
    {
        $escapade_string = $this->connection->real_escape_string($string);

        return $escapade_string;
    }


    // public function create()
    // {
    //     $sql = "INSERT INTO product(sku, p_name, p_price) ";
    //     $sql .= "VALUES ('";
    //     $sql .= $this->escape_string($this->sku) . "','";
    //     $sql .= $this->escape_string($this->name) . "','";
    //     $sql .= $this->escape_string($this->price) .  "')";
    // }
}

$data = new Database;
