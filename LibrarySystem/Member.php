<?php
class Member
{
    private $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function borrowBook(Book $book)
    {
        return $book->borrow();
    }
}