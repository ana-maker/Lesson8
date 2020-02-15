<?php
require __DIR__ . '/../autoload.php';

use App\Models\DataBase;

$dataBase = new DataBase();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dataBase->query('DELETE FROM guestbook WHERE id=:id', [':id' => $_GET['id']]);
}
header('Location: /controller/adminPanel.php');