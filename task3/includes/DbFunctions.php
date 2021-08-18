<?php


class DbFunctions
{
    private $conn;

    public function __construct(){

        require_once 'DbConfig.php';
        $database = new DbConfig();
        $this->conn = $database->dbConnect();

    }

    //Task 3. 1
    //1.	Write the Sql-Injection which will show all records from the table.
    public function show_all_records() {

      ///  $sql = "SELECT * FROM news"; ///show all records from table with no sql injection/////

        $sql = "SELECT *  FROM news WHERE id = 105 OR 1=1";   //with sql injection
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array());
        $result = $stmt->fetchAll();
        return $result;
    }

    //Task 3. 2
    //2.	Change the source code to make the injection not workable
    public function get_news($id){

        $sql = "SELECT * FROM news WHERE id = ? ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($id));
        $result = $stmt->fetchAll();
        return $result;
    }


}