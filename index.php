<?php
require __DIR__ . "/vendor/autoload.php";

$controllerStudent = new \Study\Controller\StudentController();
$controllerBook = new \Study\Controller\BookController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include_once 'src/View/Menu/menu.php' ?>
<br>
<br>
<hr/>

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
    default:
        $controllerBook->viewBook();
}
?>


</body>
</html>
