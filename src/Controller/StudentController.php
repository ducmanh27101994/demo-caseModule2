<?php


namespace Study\Controller;


use Study\Model\Student;
use Study\Model\StudentManager;

class StudentController
{
    protected $studentController;

    public function __construct()
    {
        $this->studentController = new StudentManager();
    }

    function viewAllStudent()
    {
        $students = $this->studentController->getAllStudent();
        include_once 'src/View/tbl_students/list.php';
    }

    function add_Student()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'src/View/tbl_students/add.php';
        } else {
            $id = $_REQUEST['id'];
            $student_name = $_POST['student_name'];
            $class = $_POST['class'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];

            $student = new Student($student_name, $class, $phone, $address);
            $this->studentController->addStudent($student);
            header('location:index.php?page=list-student');
        }
    }

    function delete_Student()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $this->studentController->deleteStudent($id);
            header('location:index.php?page=list-student');
        }
    }

    function update_Student()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $student = $this->studentController->getStudentId($id);
            include_once 'src/View/tbl_students/update.php';
        } else {
            $id = $_REQUEST['id'];
            $student_name = $_POST['student_name'];
            $class = $_REQUEST['class'];
            $phone = $_REQUEST['phone'];
            $address = $_REQUEST['address'];

            $student = new Student($student_name, $class, $phone, $address);
            $student->setId($id);
            $this->studentController->updateStudent($student);

            header('location:index.php?page=list-student');
        }
    }

    function search_Student()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $keyword = $_REQUEST['keyword'];
            $students = $this->studentController->searchStudent($keyword);
            include_once 'src/View/tbl_students/list.php';
        }
    }
}