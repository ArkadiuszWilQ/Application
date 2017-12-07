<?php
namespace Classes\Database;

use Classes\Config\Reader;

class Connection
{
    /** @var  \PDO */
    private $connection;

    public function __construct($databaseConfigName)
    {
        $configDatabase = new Reader();
        $configDatabase->load($databaseConfigName);

        $this->connection = new \PDO(
            'mysql:host=' . $configDatabase->read('host') .
            ';dbname=' . $configDatabase->read('database'),
            $configDatabase->read('user'),
            $configDatabase->read('password')
        );
    }

    public function fetchOne(string $query)
    {

    }

    public function fetchAll(string $query)
    {

    }

    public function execute(string $query)
    {

    }
}