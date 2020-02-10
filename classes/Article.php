<?php

class Article
{
    protected $text;
    protected $header;

    public function __construct($header,$text)
    {
        $this->header = $header;
        $this->text = $text;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function getText()
    {
        return $this->text;
    }
}
$article = new Article ('AAA','abc');