<?php


namespace Study\Controller;


use Study\Model\Book;
use Study\Model\BookManager;

class BookController
{
    protected $bookController;

    public function __construct()
    {
        $this->bookController = new BookManager();
    }
    function viewBook(){
        $books = $this->bookController->getAllBook();
        include_once 'src/View/tbl_books/listBook.php';
    }

    function add_Book(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            include_once 'src/View/tbl_books/addBook.php';
        } else {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $author = $_POST['author'];
            $status = $_POST['status'];
            $image = $_POST['image'];

            $book = new Book($name,$author,$status,$image);
            $this->bookController->addBook($book);
            header('location:index.php?page=list-book');
        }
    }
    function delete_book(){
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            $id = $_REQUEST['id'];
            $this->bookController->deleteBook($id);
            header('location:index.php?page=list-book');
        }
    }
    function update_book(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $id = $_REQUEST['id'];
            $book = $this->bookController->getBookId($id);
            include_once "src/View/tbl_books/updateBook.php";
        } else {
            $id = $_REQUEST['id'];
            $name = $_POST['name'];
            $author = $_POST['author'];
            $status = $_POST['status'];
            $image = $_POST['image'];

            $book = new Book($name,$author,$status,$image);
            $book->setId($id);
            $this->bookController->updateBook($book);
            header('location:index.php?page=list-book');
        }
    }
    function search_book(){
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $keywordBook = $_POST['keywordBook'];
            $books = $this->bookController->searchBook($keywordBook);
            include_once 'src/View/tbl_books/listBook.php';
        }
    }
}