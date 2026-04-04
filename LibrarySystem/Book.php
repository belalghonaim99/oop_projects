<?php
require('Member.php');
class Book
{
    private $title;
    private $author;
    private $isAvailable;


    public function __construct($title, $author, $isAvailable) {
        $this->title = $title;
        $this->author = $author;
        $this->isAvailable = $isAvailable;
    }
    
    public function borrow()
    {
        if($this->isAvailable === true)
            {
                $this->isAvailable == false;
                return "Book borrowed successfully";
            }
            return 'Book Not Available';
    }
    public function returnBook()
    {
        $this->isAvailable === true;
        return "Book returned";
    }
    public function getTitle()
    {
        return $this->title;
    }
}

$bookOne = new Book("PHP", "Belal", true);
$bookTwo = new Book("Design Patterns", "Omar", false);

$member = new Member("Belal");

echo $member->borrowBook($bookOne);
echo "<br>";
echo $member->borrowBook($bookTwo);