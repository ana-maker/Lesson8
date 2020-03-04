<?php


namespace App;
class Db extends Config
{
    protected $dbh;

    public function __construct()
    {
        $config = Config::getObject();
        $data = $config->data;
        $this->dbh = new \PDO('mysql:host=' . $data['db']['host'] . ';dbname=' . $data['db']['dbname'],
            $data['db']['user'], $data['db']['password']);
    }

    public function query(string $sql, $class, array $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);

    }

    public function execute(string $query, array $params = [])
    {
        $request = $this->dbh->prepare($query)->execute($params);
        if ($request) {
            return true;
        }
        return false;
    }

    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }

}
