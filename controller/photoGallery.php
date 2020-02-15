<?php
require __DIR__ . '/../autoload.php';

use App\Models\View;

$view = new View();
$namedir = './../images';
$dir = scandir($namedir);
$view->assign('dir', $dir);
$view->display(__DIR__ . '/../templates/photo_gallery_template.php');