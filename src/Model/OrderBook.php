<?php


namespace Study\Model;


class OrderBook
{
    protected $orderBook;

    public function __construct()
    {
        $this->orderBook = new DBconnect();
    }

    function addOrderBook($book_id, $borrow_id)
    {
        $sql = "INSERT INTO `tbl_detail`(`book_id`, `borrow_id`) VALUES (:book_id,:borrow_id)";
        $statement = $this->orderBook->connectDB()->prepare($sql);
        $statement->bindParam(':book_id', $book_id);
        $statement->bindParam(':borrow_id', $borrow_id);
        $statement->execute();
    }

    function showOrderById($id)
    {
        $sql = "SELECT tbl_students.student_name, tbl_students.class,tbl_students.phone,tbl_students.address, tbl_borrows.date_borrow,tbl_borrows.date_give,tbl_borrows.status,tbl_books.name,tbl_books.author,tbl_borrows.id,tbl_detail.book_id,tbl_detail.borrow_id FROM tbl_students INNER JOIN tbl_borrows ON tbl_students.id=tbl_borrows.student_id INNER JOIN tbl_detail ON tbl_borrows.id = tbl_detail.borrow_id INNER JOIN tbl_books ON tbl_detail.book_id=tbl_books.id WHERE tbl_borrows.id = :id";
        $statement = $this->orderBook->connectDB()->query($sql);
        $statement->bindParam(':id',$id);
        $statement->execute();
        $item = $statement->fetchAll();
        return $item;
    }

    function viewListOrder(){
        $sql = "SELECT * FROM `tbl_borrows`";
        $statement = $this->orderBook->connectDB()->query($sql);

        return $statement->fetchAll();
    }



}