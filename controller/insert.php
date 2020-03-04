<?php
require __DIR__ . '/../autoload.php';

use App\Models\Article;

$article = new Article();
if (isset ($_POST['title']) && isset($_POST['content'])) {
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->save();
}
