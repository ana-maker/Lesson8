<?php
require __DIR__ . '/../autoload.php';

use App\Models\Article;

if (isset($_GET['id'])) {
    $article = new Article();
    $article->id = $_GET['id'];
    $article->delete();
}
