<?php

require_once "book.php";
class digitalBook extends Book
{
    public $fileSize;
    public function __construct(string $title, string $author, int $price, int $fileSize = 5)
    {
        parent::__construct($title, $author, $price);
        $this->fileSize = $fileSize;
    }


    public function get_filesize(): int
    {
        return $this->fileSize;
    }

    public function print(){
        return "{$this->title}, {$this->author}, Filesize: {$this->fileSize}kb";
    }

}
