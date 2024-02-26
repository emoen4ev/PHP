<?php

class Database
{
    public PDO $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port = 3306;dbname=myapp;user=root;charset=utf8mb4";

        $this->connection = new PDO($dsn);
    }

    public function query($query): false|PDOStatement
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}