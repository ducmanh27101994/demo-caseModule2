<?php


namespace Study\Model;


class BorrowManager
{
    protected $borrowManager;


    public function __construct()
    {
        $this->borrowManager = new DBconnect();

    }

    function getAllBorrowManager(){
        $sql = "SELECT * FROM `tbl_borrows`";
        $statement = $this->borrowManager->connectDB()->query($sql);
        $statement->execute();
        $data = $statement->fetchAll();
        $arr = [];
        foreach ($data as $key => $item){
            $borrow = new Borrow($item['id'],$item['date_borrow'],$item['date_give'],$item['status'],$item['student_id']);
            array_push($arr,$borrow);
        }
        return $arr;
    }

    function addBorrow($borrow){
        $sql = "INSERT INTO `tbl_borrows`(`id`, `date_borrow`, `date_give`, `status`, `student_id`) VALUES (:id,:date_borrow,:date_give,:status,:student_id)";
        $statement = $this->borrowManager->connectDB()->prepare($sql);
        $statement->bindParam(':id',$borrow->getId());
        $statement->bindParam(':date_borrow',$borrow->getDateBorrow());
        $statement->bindParam(':date_give',$borrow->getDateGive());
        $statement->bindParam(':status',$borrow->getStatus());
        $statement->bindParam(':student_id',$borrow->getStudentId());
        $statement->execute();
    }

    function getBorrowById($id){
        $sql = "SELECT `id`, `date_borrow`, `date_give`, `status`, `student_id` FROM `tbl_borrows` WHERE `id`=:id";
        $statement = $this->borrowManager->connectDB()->prepare($sql);
        $statement->bindParam(":id",$id);
        $statement->execute();
        $item = $statement->fetch();
        return $item;
    }

    function updateStatus($borrow){
        $sql = "UPDATE `tbl_borrows` SET `id`=:id,`date_borrow`=:date_borrow,`date_give`=:date_give,`status`=:status,`student_id`=:student_id WHERE `id`=:id";
        $statement = $this->borrowManager->connectDB()->prepare($sql);
        $statement->bindParam(':id',$borrow->getId());
        $statement->bindParam(':date_borrow',$borrow->getDateBorrow());
        $statement->bindParam(':date_give',$borrow->getDateGive());
        $statement->bindParam(':status',$borrow->getStatus());
        $statement->bindParam(':student_id',$borrow->getStudentId());
        $statement->execute();
    }


}