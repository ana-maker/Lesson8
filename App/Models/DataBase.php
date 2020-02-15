<?php

namespace App\Models;
class DataBase
{
    protected $dbh;

    public function __construct()
    {
        $config = require __DIR__ . '/../../config.php';
        $this->dbh = new \PDO($config['dsn'], $config['username'], $config['passwd']);
    }

    public function execute(string $sql)
    {
        $request = $this->dbh->prepare($sql);
        if ($request->execute()) {
            return $request->fetchAll();
        }
        return false;
    }

    public function query(string $sql, array $data)
    {
        $request = $this->dbh->prepare($sql);
        if ($request->execute($data)) {
            return $request->fetchAll();
        }
        return false;
    }
}
