<?php


class DbConfig
{
    private $conn;

    public function __construct(){

    }

    public function dbConnect() {

        return $this->conn = new PDO("mysql:host=localhost;dbname=shares","root","norsuadmin18");

    }
}