<?php
class  Book{
    public function __construct(
        public string $book,
        public string $author,
        public int $pages
    ){}

//    public $book;
//    public $author;
//    public $pages;
//    public function __construct($book,$author, $pages)
//    {
//        $this->book = $book;
//        $this->author = $author;
//        $this->pages = $pages;
//
//    }
}
$obj = new Book(book:'my book',author:'skz',pages:20);
var_dump($obj);