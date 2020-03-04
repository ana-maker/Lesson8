<?php

namespace App;
class Config
{
    protected $data;
    private static $object;

    private function __construct()
    {
        $this->data = include __DIR__ . '/../config.php';
    }

    public static function getObject()
    {
        if (!isset(static::$object)) {
            return static::$object = new Config();
        }
        return static::$object;
    }
}

