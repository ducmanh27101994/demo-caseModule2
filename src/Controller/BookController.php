<?php


namespace Study\Controller;


use Study\Model\Book;
use Study\Model\BookManager;
use Study\Model\CategoryManager;

class BookController
{
    protected $bookController;

    public function __construct()
    {
        $this->bookController = new BookManager();
        $this->category = new CategoryManager();
    }
    function viewBook(){
        $books = $this->bookController->getAllBook();

        include_once 'src/View/tbl_books/listBook.php';
    }
    function viewBookUser(){
        $books = $this->bookController->getAllBook();

        include_once 'src/View/tbl_books/userBook.php';
    }


    function add_Book(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $categorys = $this->category->getAllCategory();
            include_once 'src/View/tbl_books/addBook.php';
        } else {
            $file = $_FILES['image-file']['tmp_name'];
            $path = "uploads/".$_FILES['image-file']['name'];
            if (move_uploaded_file($file,$path)){
                echo "Success";
            } else {
                echo "Unsuccessful";
            }

            $id = $_POST['id'];
            $name = $_POST['name'];
            $author = $_POST['author'];
            $status = $_POST['status'];
            $category_id = $_POST['category_id'];


            $book = new Book($name,$author,$status,$path,$category_id);
            $this->bookController->addBook($book);
            header('location:admin.php?page=list-book');
        }
    }
    function delete_book(){
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            $id = $_REQUEST['id'];
            $this->bookController->deleteBook($id);
            header('location:admin.php?page=list-book');
        }
    }
    function update_book(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $id = $_REQUEST['id'];
            $book = $this->bookController->getBookId($id);
            $categorys = $this->category->getAllCategory();
            include_once "src/View/tbl_books/updateBook.php";
        } else {
            $file = $_FILES['image-file']['tmp_name'];
            $path = "uploads/".$_FILES['image-file']['name'];
            if (move_uploaded_file($file,$path)){
                echo "Success";
            } else {
                echo "Unsuccessful";
            }

            $id = $_REQUEST['id'];
            $name = $_POST['name'];
            $author = $_POST['author'];
            $status = $_POST['status'];
//            $image = $_POST['image'];
            $category_id = $_POST['category_id'];

            $book = new Book($name,$author,$status,$path,$category_id);
            $book->setId($id);
            $this->bookController->updateBook($book);
            header('location:admin.php?page=list-book');
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