<?php
session_start();
require __DIR__ . '/../autoload.php';

use App\Models\DataBase;
use App\Models\User;
use App\Models\View;

$dataBase = new DataBase();
$users = $dataBase->execute('SELECT * FROM users');
If (isset($_POST['login']) && isset($_POST['passwd'])) {
    $password = $_POST['passwd'];
    $login = $_POST['login'];
    $user = new User($users);
    if ($user->checkPassword($login, $password) === false) {
        header('Location: /../controller/autentification.php');
    } else {
        $_SESSION['login'] = $login;
        header('Location: /../controller/index.php');
    }
}
$view = new View();
$view->display(__DIR__ . '/../templates/autentification_template.php');