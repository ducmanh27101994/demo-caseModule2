<?php


namespace Study\Model;


class StudentManager
{
    protected $dataStudent;

    public function __construct()
    {
        $this->dataStudent = new DBconnect();
    }

    function getAllStudent()
    {
        $sql = "SELECT * FROM tbl_students";
        $statement = $this->dataStudent->connectDB()->query($sql);
        $statement->execute();
        $data = $statement->fetchAll();
        $arr = [];
        foreach ($data as $key => $item) {
            $student = new Student($item['student_name'], $item['class'], $item['phone'], $item['address']);
            $student->setId($item['id']);
            array_push($arr, $student);
        }
        return $arr;
    }

    function addStudent($student)
    {
        $sql = "INSERT INTO `tbl_students`(`id`, `student_name`, `class`, `phone`, `address`) VALUES (:id,:student_name,:class,:phone,:address)";
        $statement = $this->dataStudent->connectDB()->prepare($sql);
        $statement->bindParam(':id', $student->getId());
        $statement->bindParam(':student_name', $student->getStudentName());
        $statement->bindParam(':class', $student->getClass());
        $statement->bindParam(':phone', $student->getPhone());
        $statement->bindParam(':address', $student->getAddress());
        $statement->execute();
    }

    function deleteStudent($id)
    {
        $sql = "DELETE FROM tbl_students WHERE id = :id";
        $statement = $this->dataStudent->connectDB()->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
    }

    function getStudentId($id){
        $sql = "SELECT `id`, `student_name`, `class`, `phone`, `address` FROM `tbl_students` WHERE `id` = :id";
        $statement = $this->dataStudent->connectDB()->prepare($sql);
        $statement->bindParam(':id',$id);
        $statement->execute();
        $item = $statement->fetch();
        return $item;
    }

    function updateStudent($student){
        $sql = "UPDATE `tbl_students` SET `id`=:id,`student_name`=:student_name,`class`=:class,`phone`=:phone,`address`=:address WHERE `id`=:id";
        $statement = $this->dataStudent->connectDB()->prepare($sql);
        $statement->bindParam(':id', $student->getId());
        $statement->bindParam(':student_name', $student->getStudentName());
        $statement->bindParam(':class', $student->getClass());
        $statement->bindParam(':phone', $student->getPhone());
        $statement->bindParam(':address', $student->getAddress());
        $statement->execute();
    }

    function searchStudent($keyword){
        $sql = "SELECT * FROM `tbl_students` WHERE `student_name` LIKE :keyword";
        $statement = $this->dataStudent->connectDB()->prepare($sql);
        $statement->bindValue(':keyword','%'.$keyword.'%');
        $statement->execute();
        $data = $statement->fetchAll();
        $arr = [];
        foreach ($data as $key => $item){
            $student = new Student($item['student_name'], $item['class'], $item['phone'], $item['address']);
            $student->setId($item['id']);
            array_push($arr, $student);
        }
        return $arr;
        }

}