<?php
require __DIR__ . '/classes/DB.php';
require __DIR__ . '/classes/View.php';
$db = new DB();
$dataFromDB = $db->query('SELECT * FROM news ORDER BY id DESC', []);
$view = new View();
$view->assign('dataFromDB', $dataFromDB);
$view->display(__DIR__ . '/templates/indexTemplate.php');
