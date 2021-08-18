<?php

class DbFunctions
{
    private $conn;

    public function __construct(){

        require_once 'DbConfig.php';
        $database = new DbConfig();
        $this->conn = $database->dbConnect();

    }

    //get all books
    public function get_all_books_with_author(){



        $sql = "
                SELECT books.author_id, books.book_name, authors.first_name, authors.last_name, books.publish_date
                FROM books
                INNER JOIN authors
                ON books.author_id = authors.id ";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array());
        $result = $stmt->fetchAll();
        return $result;
    }

}