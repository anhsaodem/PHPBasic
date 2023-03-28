<?php
require_once 'config.php';
class DB
{
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
    public function query($sql, $data = [], $isStatus = true)
    {
        $statement = $this->conn->prepare($sql);
        $status = $statement->execute($data);
        if ($isStatus) {
            return $status;
        }
        return $statement;
    }
    /**
     * ADD function
     * return true if created or false if not
     */
    public function create($table, $attributes = [])
    {
        //name, created_at, updated_at
        if (!empty($attributes)) {
            $keys = array_keys($attributes);
            $sql = "INSERT INTO {$table}(" . implode(',', $keys) . ") VALUES(:" . implode(", :", $keys) . ")";
            $status = $this->query($sql, $attributes);
            return $status;
        } else {
            return false;
        }
    }
    //Hàm insert dữ liệu vào table => return về id vừa insert
    public function createGetId($table, $attributes = [])
    {
        if (!empty($attributes)) {
            $this->create($table, $attributes);
            return $this->conn->lastInsertId();
        }
        return false;
    }
    //Hàm update dữ liệu vào table => return true, false
    function update($table, $attributes = [], $condition)
    {
        //UPDATE groups SET name=:name, email=:email WHERE id=:id

        if (!empty($attributes)) {
            $keys = array_keys($attributes);
            $update = "";
            foreach ($keys as $key) {
                $update .= $key . '=:' . $key . ', ';
            }

            $update = rtrim($update, ', ');

            $sql = "UPDATE {$table} SET " . $update . " WHERE $condition";
            $status = $this->query($sql, $attributes);
            return $status;
        }
        return false;
    }
    //Hàm delete
    function delete($table, $condition)
    {
        $sql = "DELETE FROM {$table} WHERE $condition";
        $status = $this->query($sql);
        return $status;
    }

    //Hàm get
    function get($sql, $data = [])
    {

        $statement = $this->query($sql, $data, false);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    //hàm first
    function first($sql, $data = [])
    {
        $statement = $this->query($sql, $data, false);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    //Hàm getRows
    function getRows($sql, $data = [])
    {
        $statement = $this->query($sql, $data, false);
        return $statement->rowCount();
    }
}
