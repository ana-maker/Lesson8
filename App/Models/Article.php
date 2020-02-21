<?php

namespace App\Models;

use App\Model;

class Article extends Model
{
    public const TABLE = 'news';
    public $title;
    public $content;
}
