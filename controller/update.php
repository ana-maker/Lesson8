<?php
require __DIR__ . '/../autoload.php';

use App\Models\Article;

if (isset($_POST['title']) && isset($_POST['content']) && isset($_GET['id'])) {
    $article = new Article();
    $article->id = $_GET['id'];
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->save();
}
