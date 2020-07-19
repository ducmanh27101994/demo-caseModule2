<?php
require __DIR__ . "/vendor/autoload.php";

$controllerStudent = new \Study\Controller\StudentController();
$controllerBook = new \Study\Controller\BookController();
$controllerBorrow = new \Study\Controller\BorrowController();
$controllerDetail = new \Study\Controller\DetailController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $checkBorrow = $_POST['checkBorrow'];

    if ($checkBorrow==='BOOK BORROWS'){
        header('location:index.php?page=show-dateBorrow');
    } elseif ($checkBorrow==='RETURN BOOKS BORROWS'){
        header('location:index.php?page=return-borrow');
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child() {
            background-color: #dddddd;
        }
    </style>
</head>
<body>


<?php
include_once 'src/View/Menu/menu.php';
echo '<br>';
echo '<br>';
echo '<hr/>';


switch ($page) {
    case 'list-book':
        $controllerBook->viewBook();
        break;
    case 'add-book':
        $controllerBook->add_Book();
        break;
    case 'delete-book':
        $controllerBook->delete_book();
        break;
    case 'update-book':
        $controllerBook->update_book();
        break;
    case 'search-book':
        $controllerBook->search_book();
        break;
    case 'list-student':
        $controllerStudent->viewAllStudent();
        break;
    case 'add-student':
        $controllerStudent->add_Student();
        break;
    case 'delete-student':
        $controllerStudent->delete_Student();
        break;
    case 'update-student':
        $controllerStudent->update_Student();
        break;
    case 'search-student':
        $controllerStudent->search_Student();
        break;
    case 'list-borrow':
        $controllerBorrow->viewBorrow();
        break;
    case 'add-borrow':
        $controllerBorrow->addBorrow();
        break;
    case 'view-order':
        $controllerDetail->viewListOrder();
        break;
    case 'add-orderBook':
        $controllerDetail->addOrderBook();
        break;
    case 'update-status':
        $controllerBorrow->updateBorrow();
        break;
    case 'showFull-borrow':
        $controllerDetail->showOrderBorrow();
        break;
    case 'showOrder-Id':
        $controllerDetail->showOrderBorrowById();
        break;
    case 'delete-order':
        $controllerDetail->deleteOrder();
        break;
    case 'delete-borrow':
        $controllerBorrow->deleteBorrow();
        break;
    case 'show-dateBorrow':
        $controllerDetail->showDateBorrow();
        break;
    case 'search-borrow':
        $controllerBorrow->searchBorrow();
        break;
    case 'return-borrow':
        $controllerDetail->showReturnBorrow();
        break;
    default:
        $controllerBook->viewBook();
}
?>


</body>
</html>
