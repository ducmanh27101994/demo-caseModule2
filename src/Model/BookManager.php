<?php


namespace Study\Model;


class BookManager
{
    protected $dataBook;

    public function __construct()
    {
        $this->dataBook= new DBconnect();
    }
    function getAllBook(){
        $sql = "SELECT * FROM `tbl_books` ORDER by id DESC";
        $statement = $this->dataBook->connectDB()->query($sql);
        $statement->execute();
        $data = $statement->fetchAll();
        $arr = [];
        foreach ($data as $key => $item){
            $book = new Book($item['name'],$item['author'],$item['status'],$item['image']);
            $book->setId($item['id']);
            array_push($arr,$book);
        }
        return $arr;
    }

    function addBook($book){
        $sql = "INSERT INTO `tbl_books`(`id`, `name`, `author`, `status`,`image`) VALUES (:id,:name,:author,:status,:image)";
        $statement = $this->dataBook->connectDB()->prepare($sql);
        $statement->bindParam(':id',$book->getId());
        $statement->bindParam(':name',$book->getName());
        $statement->bindParam(':author',$book->getAuthor());
        $statement->bindParam(':status',$book->getStatus());
        $statement->bindParam(':image',$book->getImage());
        $statement->execute();
    }
    function deleteBook($id){
        $sql = "DELETE FROM tbl_books WHERE id = :id";
        $statement = $this->dataBook->connectDB()->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
    }

    function getBookId($id){
        $sql = "SELECT * FROM tbl_books WHERE id=:id";
        $statement = $this->dataBook->connectDB()->prepare($sql);
        $statement->bindParam(':id',$id);
        $statement->execute();
        $item = $statement->fetch();
        return $item;
    }
    function updateBook($book){
        $sql = "UPDATE `tbl_books` SET `id`=:id,`name`=:name,`author`=:author,`status`=:status,`image`=:image WHERE `id`=:id";
        $statement = $this->dataBook->connectDB()->prepare($sql);
        $statement->bindParam(':id', $book->getId());
        $statement->bindParam(':name', $book->getName());
        $statement->bindParam(':author', $book->getAuthor());
        $statement->bindParam(':status', $book->getStatus());
        $statement->bindParam(':image', $book->getImage());

        $statement->execute();
    }

    function searchBook($keyword){
        $sql = "SELECT * FROM tbl_books WHERE name LIKE :keyword";
        $statement = $this->dataBook->connectDB()->prepare($sql);
        $statement->bindValue(':keyword','%'.$keyword.'%');
        $statement->execute();
        $data = $statement->fetchAll();
        $arr = [];
        foreach ($data as $key => $item){
            $book = new Book($item['name'],$item['author'],$item['status'],$item['image']);
            $book->setId($item['id']);
            array_push($arr,$book);
        }
        return $arr;
    }

}