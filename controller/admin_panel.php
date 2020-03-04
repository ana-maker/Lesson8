<?php
require __DIR__ . '/../autoload.php';

use App\Models\Article;
use App\Models\View;

$news = Article::findAll();
$view = new View();
$view->assign('news', $news);
$view->display(__DIR__ . '/../templates/template.php');