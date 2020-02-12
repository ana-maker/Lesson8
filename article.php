<?php
require __DIR__ . '/classes/DB.php';
require __DIR__ . '/classes/View.php';
$db = new DB();
$view = new View();
if (isset($_GET['id'])) {
    $dataFromDB = $db->query('SELECT * FROM news WHERE id=:id', [':id' => $_GET['id']]);
    $view->assign('dataFromDB', $dataFromDB);
    $view->display(__DIR__ . '/templates/articleTemplate.php');
}
