<?php
//Query Builder => Truy vấn CSDL mà không cần viết câu lệnh SQL

//DB::table('users')->select('id', 'name', 'email')->where('id', '>=', 2)->get()
// "SELECT id,name,email WHERE id >= 2"

//DB::select('id', 'name', 'email')->table('users')->where('id', '>=', 2)->get()

// $db->table();
// $db->select('id', 'name', 'email');
// $db->where();

trait QueryBuilder
{
    private $table = "";
    protected $sql = "";
    protected $where = "";
    protected $options = "";
    protected $selectField = "*";

    //hàm table
    private function table($table)
    {
        $this->table = $table;
        return $this;
    }
    private function select(...$params)
    {
        //Xử lý logic
        foreach ($params as $key => $param) {
            if ($param == "*") {
                $this->selectField = "*";
            } else {
                $this->selectField="";
                $this->selectField .= "{$param},";
            }
        }
        $this->selectField = rtrim($this->selectField, ", ");
        // var_dump($this->selectField);
        return $this;
    }
    private function where($files, $condition, $value)
    {
        //Xử lý logic
        if (empty($this->where)) {
            $options = " WHERE ";
        } else {
            $options = " AND ";
        }
        $this->where .= "$options $files $condition $value";
        return $this;
    }
    private function get()
    {
        //Xử lý logic
        $this->sql =  "SELECT $this->selectField FROM $this->table $this->where";
        echo $this->sql;
        $result = $this->query($this->sql)->fetchAll(PDO::FETCH_ASSOC);
        showData($result);
    }
}
