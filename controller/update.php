<?php
require __DIR__ . '/../autoload.php';

use App\Models\DataBase;

$dataBase = new DataBase();
if (isset($_POST['text'])) {
    $text = $_POST['text'];
    $dataBase->execute('UPDATE about SET text=' . '\'' . $text . '\'');
}
header('Location: /controller/adminPanel.php');