<?php
session_start();


require __DIR__ . "/vendor/autoload.php";
$controllerStudent = new \Study\Controller\StudentController();
$controllerBook = new \Study\Controller\BookController();
$controllerBorrow = new \Study\Controller\BorrowController();
$controllerDetail = new \Study\Controller\DetailController();
$controllerCategory = new \Study\Controller\CategoryController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;



if (isset($_SESSION['username']) && isset($_SESSION['password'])){
    include ('admin.php');
}
else {
    include ('src/View/login/loginNew.php');
}
?>
