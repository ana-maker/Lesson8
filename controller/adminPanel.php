<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: /../controller/autentification.php');
}

if ($_SESSION['login'] !== 'admin') {
    header('Location: /../controller/index.php');
}
require __DIR__ . '/../autoload.php';

use App\Models\Uploader;
use App\Models\DataBase;
use App\Models\View;

$uploadedFile = new Uploader('img');
$uploadedFile->isUploaded();
$uploadedFile->upload();
$dataBase = new DataBase();
$comments = $dataBase->execute('SELECT * FROM guestbook');
$view = new View();
$view->assign('comments', $comments);
$view->display(__DIR__ . '/../templates/admin_template.php');

