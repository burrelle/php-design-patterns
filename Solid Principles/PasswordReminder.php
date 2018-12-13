<?php

interface ConnectionInterface
{
    public function connect();
}

class DBConnection implements ConnectionInterface
{
    public function connection()
    {
        // TODO: Implement connection() method
    }
}

class PasswordReminder
{
    /**
     * @var MySQLConnection
     */
    private $dbConnection;

    public function __construct(ConnectionInterface $dbConnection)
    {
        $this->$dbConnection = $dbConnection;
    }
}
