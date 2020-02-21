<?php

namespace App;


abstract class Model
{
    public $id;

    public static function findAll()
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::TABLE, static::class);
    }

    public static function findByid()
    {
        $db = new Db();
        return $db->query('SELECT * FROM news WHERE id=1',static::class);
    }

}
