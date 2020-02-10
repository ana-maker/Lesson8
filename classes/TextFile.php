<?php


class TextFile
{
    protected $records;
    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
        $this->records = file($path);
    }


    public function append($text)
    {
        $this->records[] = $text;
        return $this;
    }

    public function save()
    {
        file_put_contents($this->path, implode(PHP_EOL, $this->records));
    }
}



