<?php
require __DIR__.'/TextFile.php';
class GuestBook extends TextFile
{
    public function getData()
    {
        return $this->records;
    }
}