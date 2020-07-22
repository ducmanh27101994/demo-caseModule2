<?php
require __DIR__ . "/vendor/autoload.php";

$controllerStudent = new \Study\Controller\StudentController();
$controllerBook = new \Study\Controller\BookController();
$controllerBorrow = new \Study\Controller\BorrowController();
$controllerDetail = new \Study\Controller\DetailController();
$controllerCategory = new \Study\Controller\CategoryController();

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $checkBorrow = $_POST['checkBorrow'];

    if ($checkBorrow==='BOOK BORROWS'){
        header('location:admin.php?page=show-dateBorrow');
    } elseif ($checkBorrow==='RETURN BOOKS BORROWS'){
        header('location:admin.php?page=return-borrow');
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>


<?php
include_once 'src/View/Menu/menu.php';


?>
<!--<div class="container">-->
<?php
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
    case 'list-category':
        $controllerCategory->viewAllCategory();
        break;
    case 'add-category':
        $controllerCategory->addCategory();
        break;
    case 'delete-category':
        $controllerCategory->deleteCategory();
        break;
    case 'update-category':
        $controllerCategory->updateCategory();
        break;
    case 'search-category':
        $controllerCategory->searchCategory();
        break;
    case "login":
        include ('src/View/login/loginNew.php');
        break;
    case 'logout':
        include ('src/View/login/logout.php');
        break;
    default:
        $controllerBook->viewBook();
}
?>
<!--</div>-->
</body>
</html>
