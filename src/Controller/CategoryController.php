<?php


namespace Study\Controller;


use Study\Model\Category;
use Study\Model\CategoryManager;

class CategoryController
{
    protected $categoryController;

    public function __construct()
    {
        $this->categoryController = new CategoryManager();
    }

    function viewAllCategory()
    {
        $categorys = $this->categoryController->getAllCategory();
        include_once 'src/View/tbl_categorys/listCategory.php';
    }

    function addCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'src/View/tbl_categorys/addCategory.php';
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['category'];
            $comment = $_REQUEST['comment'];
            $category = new Category($name, $comment);
            $this->categoryController->addCategory($category);
            header('location:admin.php?page=list-category');
        }
    }

    function deleteCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $this->categoryController->deleteCategory($id);
            header('location:admin.php?page=list-category');
        }
    }

    function updateCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $category = $this->categoryController->getCategoryById($id);
            include_once 'src/View/tbl_categorys/updateCategory.php';
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['category'];
            $comment = $_REQUEST['comment'];
            $category = new Category($name, $comment);
            $category->setId($id);
            $this->categoryController->updateCategory($category);
            header('location:admin.php?page=list-category');

        }
    }

    function searchCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $keyword = $_POST['search-category'];
            $categorys = $this->categoryController->searchCategory($keyword);
            include_once 'src/View/tbl_categorys/listCategory.php';
        }

    }


}