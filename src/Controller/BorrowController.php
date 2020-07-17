<?php


namespace Study\Controller;


use Study\Model\Borrow;
use Study\Model\BorrowManager;
use Study\Model\StudentManager;

class BorrowController
{
    protected $borrowController;
    protected $students;
    public function __construct()
    {

        $this->borrowController = new BorrowManager();
        $this->students = new StudentManager();

    }

    function viewBorrow(){
        $borrows = $this->borrowController->getAllBorrowManager();
        include_once 'src/View/tbl_borrows/listBorrows.php';
    }

    function addBorrow(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $students = $this->students->getAllStudent();
            include 'src/View/tbl_borrows/addBorrows.php';
        } else {
            $id = $_REQUEST['id'];
            $date_borrow = $_REQUEST['date_borrow'];
            $date_give = $_REQUEST['date_give'];
            $status = $_REQUEST['status'];
            $student_id = $_REQUEST['student_id'];

            $borrow = new Borrow($id,$date_borrow,$date_give,$status,$student_id);
            $this->borrowController->addBorrow($borrow);
            header('location:index.php?page=add-orderBook');
        }
    }

    function updateBorrow(){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $id = $_REQUEST['id'];
            $students = $this->students->getAllStudent();
            $borrows = $this->borrowController->getBorrowById($id);
            include_once 'src/View/tbl_borrows/updateBorrows.php';
        } else {
            $id = $_REQUEST['id'];
            $date_borrow = $_REQUEST['date_borrow'];
            $date_give = $_REQUEST['date_give'];
            $status = $_REQUEST['status'];
            $student_id = $_REQUEST['student_id'];

            $borrow = new Borrow($id,$date_borrow,$date_give,$status,$student_id);
            $this->borrowController->updateStatus($borrow);
            header('location:index.php?page=view-order');

        }
    }

}