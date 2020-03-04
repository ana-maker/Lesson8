<?php

function __autoload($class)
{
    require str_replace('\\', '/', __DIR__ . '/' . $class . '.php');
}
