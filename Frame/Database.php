<?php

namespace Frame;

use PDO;
use PDOException;

class Database
{

    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=" . CONFIG['db_hostname']. ";dbname=" . CONFIG['db_name'] . ";charset=" . CONFIG['db_charset'], CONFIG['db_username'], CONFIG['db_password']);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
        } catch (PDOException $e) {
            print 'db connection error';
        }
    }

    // Select
    public function select($sql)
    {
        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    // Insert
    public function insert($sql)
    {
        $statement = $this->connection->query($sql);
        return $this->connection->lastInsertId();
    }

    // Update
    public function update($sql)
    {
        $statement = $this->connection->query($sql);
        return $statement->rowCount();
    }

    // Remove
    public function remove($sql)
    {
        $statement = $this->connection->query($sql);
        return $statement->rowCount();
    }

    function __destruct()
    {
        $this->connection = null;
    }
}
?>