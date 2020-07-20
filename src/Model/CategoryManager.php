<?php


namespace Study\Model;


class CategoryManager
{
    protected $databaseCategory;

    public function __construct()
    {
        $this->databaseCategory = new DBconnect();
    }

    function getAllCategory(){
        $sql = "SELECT * FROM `tbl_categorys` ORDER by id DESC";
        $statement = $this->databaseCategory->connectDB()->query($sql);
        $data = $statement->fetchAll();
        $arr = [];
        foreach ($data as $item){
            $category = new Category($item['name'],$item['comment']);
            $category->setId($item['id']);
            array_push($arr,$category);
        }
        return $arr;
    }

    function addCategory($category){
        $sql = "INSERT INTO `tbl_categorys`(`id`, `name`, `comment`) VALUES (:id,:name,:comment)";
        $statement = $this->databaseCategory->connectDB()->prepare($sql);
        $statement->bindParam(':id',$category->getId());
        $statement->bindParam(':name',$category->getName());
        $statement->bindParam(':comment',$category->getComment());
        $statement->execute();
    }

    function deleteCategory($id){
        $sql = "DELETE FROM `tbl_categorys` WHERE `id`=:id";
        $statement = $this->databaseCategory->connectDB()->prepare($sql);
        $statement->bindParam(':id',$id);
        $statement->execute();
    }

    function getCategoryById($id){
        $sql = "SELECT * FROM `tbl_categorys` WHERE `id`=:id";
        $statement = $this->databaseCategory->connectDB()->prepare($sql);
        $statement->bindParam(':id',$id);
        $statement->execute();
        return $statement->fetch();
    }

    function updateCategory($category){
        $sql = "UPDATE `tbl_categorys` SET `id`=:id,`name`=:name,`comment`=:comment WHERE `id`=:id";
        $statement = $this->databaseCategory->connectDB()->prepare($sql);
        $statement->bindParam(':id',$category->getId());
        $statement->bindParam(':name',$category->getName());
        $statement->bindParam(':comment',$category->getComment());
        $statement->execute();
    }

    function searchCategory($keyword){
        $sql = "SELECT * FROM `tbl_categorys` WHERE `name` LIKE :keyword";
        $statement = $this->databaseCategory->connectDB()->prepare($sql);
        $statement->bindValue(':keyword',"%".$keyword."%");
        $statement->execute();
        $data = $statement->fetchAll();
        $arr = [];
        foreach ($data as $item){
            $category = new Category($item['name'],$item['comment']);
            $category->setId($item['id']);
            array_push($arr,$category);
        }
        return $arr;
    }


}