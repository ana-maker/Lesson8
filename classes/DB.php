<?php

class DB
{
    protected $dbh;
    protected $sth;

    public function __construct()
    {
        $config = require __DIR__ . '/../config.php';
        $this->dbh = new PDO($config['dsn'], $config['username'], $config['passwd']);
    }

    public function execute(string $sql)
    {
        $this->sth = $this->dbh->prepare($sql)->execute();
        if (!$this->sth) {
            return false;
        }
        return true;
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