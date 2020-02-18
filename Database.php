<?php

// use PDO;
// use PDOException;

class Database
{

    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host=localhost:8889;dbname=testine;charset=utf8', 'root', 'root');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
        } catch (PDOException $e) {
            print 'db connection rrrr';
        }
    }

    // Select
    public function select($sql, $param = [])
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute($param);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // Insert
    public function insert($sql, $param = [])
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute($param);
        return $this->connection->lastInsertId();
    }

    // Update
    public function update($sql, $param = [])
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute($param);
        return $statement->rowCount();
    }

    // Remove
    public function remove( $sql, $param = [])
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute($param);
        return $statement->rowCount();
    }

    function __destruct()
    {
        $this->connection = null;
    }
}
?>