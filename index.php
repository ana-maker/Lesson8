<?php
require __DIR__ .'/autoload.php';
$data = \App\Models\Article :: findByid();
var_dump($data);