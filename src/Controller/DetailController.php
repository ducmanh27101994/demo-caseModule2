<?php


namespace Study\Controller;


use Study\Model\BookManager;
use Study\Model\BorrowManager;
use Study\Model\OrderManager;
use Study\Model\StudentManager;

class DetailController
{
    protected $detailController;
    protected $books;
    protected $borrows;
    protected $students;
    public function __construct()
    {
        $this->detailController=new OrderManager();
        $this->borrows = new BorrowManager();
        $this->books = new BookManager();
        $this->students= new StudentManager();
    }

    function addOrderBook(){
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            $books = $this->books->getAllBook();
            $borrows = $this->borrows->getAllBorrowManager();
            include_once 'src/View/detail/orderBook.php';
        } else {
            $book_id = $_REQUEST['book_id'];
            $borrow_id = $_REQUEST['borrow_id'];

            $this->detailController->addOrderBook($book_id,$borrow_id);
            header("location:admin.php?page=view-order");
        }
    }

    function viewListOrder(){
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            $orders = $this->detailController->viewListOrder();
            include_once 'src/View/detail/showOrder.php';
        }


    }

    function showOrderBorrow()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $orders = $this->detailController->showOrderBorrow();
            include_once 'src/View/detail/detailOrder.php';
        }
    }

    function showOrderBorrowById(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $id = $_REQUEST['id'];
            $orders = $this->detailController->showOrderBorrowById($id);
            include_once 'src/View/detail/Order.php';
        }
    }
    function deleteOrder(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $book_id = $_REQUEST['book_id'];
            $borrow_id = $_REQUEST['borrow_id'];
            $this->detailController->deleteOrder($book_id,$borrow_id);
            header("location:admin.php?page=list-borrow");
        }
    }

    function showDateBorrow(){
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            $orders = $this->detailController->showDateBorrow();
            include_once 'src/View/detail/showDateBorrow.php';
        }
    }

    function showReturnBorrow(){
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            $orders = $this->detailController->showReturnBorrow();
            include_once 'src/View/detail/showReturnBorrow.php';
        }
    }




}