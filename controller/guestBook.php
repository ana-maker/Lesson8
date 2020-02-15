<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: /../controller/autentification.php');
}

require __DIR__ . '/../autoload.php';

use App\Models\DataBase;
use App\Models\View;

$dataBase = new DataBase();
$comments = $dataBase->execute('SELECT * FROM guestbook');
$view = new View();
$view->assign('comments', $comments);
$view->display(__DIR__ . '/../templates/guest_book_template.php');


