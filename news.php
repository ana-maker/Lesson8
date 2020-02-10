<?php
require __DIR__ . '/classes/Article.php';
require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';
$news = new News(__DIR__ . '/News.txt');
$article = new Article('BBB', 'gfgfgfgfgfg');
$news->add($article);
$news->save();
$view = new View();
$view->assign('news',$news);
$view->display(__DIR__ .'/templates/news_template.php');

