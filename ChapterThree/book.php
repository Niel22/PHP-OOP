<?php

abstract class Book
{
    public $title;

    public function __construct(string $title)
    {

        $this->title = $title;
    }

    public function get_title(): string
    {
        return $this->title;
    }
}