<?php
session_start();
require __DIR__ . '/../autoload.php';

use App\Models\DataBase;
use App\Models\View;

$dataBase = new DataBase();
$records = $dataBase->execute('SELECT * FROM about');
$view = new View();
$view->assign('records', $records);
$view->display(__DIR__ . '/../templates/main_page_template.php');




