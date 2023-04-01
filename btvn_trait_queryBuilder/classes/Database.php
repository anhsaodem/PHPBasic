<?php
class Database
{
    use QueryBuilder;
    public $conn;
    public function __construct()
    {
        if (class_exists('PDO')) {
            try {
                $dsn = DRIVER . ':host=' . HOST . ';dbname=' . DB;
                $options = [
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ];
                $conn = new PDO($dsn, USER, PASS, $options);
                $this->conn = $conn;
            } catch (PDOException $e) {
                echo $e->getMessage();
                die();
            }
        } else {
            echo 'Vui long kiem tra lai PDO class';
        }
    }
    public function query($sql)
    {
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        return $statement;
    }
   
}
