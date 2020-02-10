<?php

class News
{
    protected $path;
    protected $data;

    public function __construct($path)
    {
        $this->path = $path;
        $this->load();
    }

    protected function load()
    {
        $file = file($this->path,FILE_IGNORE_NEW_LINES);
        $this->data = [];
        foreach ($file as $string) {
            $parts = explode('###', $string);
            $this->data[] = new Article($parts[0], $parts[1]);
        }
    }

    public function getAllNews()
    {
        return $this->data;
    }

    public function add(Article $article)
    {
        $this->data[] = $article;
    }

    public function save()
    {
        $lines = [];
        foreach ($this->data as $article) {
            $lines[]= $article->getHeader() .'###'. $article->getText();
        }
        file_put_contents($this->path,implode(PHP_EOL,$lines));
    }
}


