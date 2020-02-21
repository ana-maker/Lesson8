<?php

namespace App;
class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = (include __DIR__ . '/../config.php')['db'];
        $this->dbh = new \PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['user'], $config['password']);
    }

    public function query($sql, $class)
    {
        return $this->dbh->query($sql)->fetchAll(\PDO::FETCH_CLASS, $class);

    }

    public function execute(string $query,array $params =[])
    {
        $request = $this->dbh->prepare($query)->execute($params);
        if ($request) {
            return true;
        }
        return false;
    }

}


