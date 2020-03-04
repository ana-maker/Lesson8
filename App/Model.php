<?php


namespace App;


use App\Models\Article;

abstract class Model
{
    public $id;

    public static function findAll()
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::TABLE . ' ' . 'ORDER BY id DESC ', static::class);
    }

    public static function findById($id)
    {
        $db = new Db();
        $request = $db->query('SELECT * FROM ' . static::TABLE . ' ' . 'WHERE id=:id', static::class, [':id' => $id]);
        if ($request) {
            return $request;
        }
        return false;
    }

    public function insert()
    {
        $fields = get_object_vars($this);
        $cols = [];
        $data = [];
        foreach ($fields as $name => $value) {
            if ('id' === $name) {
                continue;
            }
            $cols[] = $name;
            $data[':' . $name] = $value;
        }
        $sql = 'INSERT INTO ' . static::TABLE . ' 
        (' . implode(',', $cols) . ') 
        VALUES 
        (' . implode(',', array_keys($data)) . ')';
        $db = new Db();
        $db->execute($sql, $data);
        $this->id = $db->getLastId();
    }

    public function update()

    {
        $fields = get_object_vars($this);
        $cols = [];
        $data = [];
        foreach ($fields as $name => $value) {
            if ('id' === $name) {
                continue;
            }
            $data[':' . $name] = $value;
            $cols[] = $name . '=' . ':' . $name;
            $str = implode(',', $cols);
        }
        $sql = 'UPDATE ' . static::TABLE . ' SET ' . $str . ' WHERE id=' . $this->id . ' ';
        $db = new Db();
        $db->execute($sql, $data);

    }

    public function delete()
    {
        $sql = 'DELETE from ' . static::TABLE . ' WHERE id=' . $this->id . ' ';
        $db = new Db();
        $db->execute($sql);
    }

    public function save()
    {
        if (!$this->id) {
            $this->insert();
        }
        $this->update();
    }

}
