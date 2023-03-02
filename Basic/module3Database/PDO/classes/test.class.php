<?php
class Test extends Db
{
    public function getUser()
    {
        $sql = "SELECT * FROM users";
        $conn = $this->connect(); //Kết nối Db
        $stmt = $conn->query($sql); // thực thi câu lệnh truy vấn
        $users = $stmt->fetchAll(); //Lấy dữ liệu từ câu lệnh truy vấn
        return $users; //Trả về dữ liệu
    }
    public function getUserStmt($id)   //Lây dữ liệu với điều kiện 
    {
        $sql = "SELECT * FROM users WHERE id > ?";
        $conn = $this->connect(); //Kết nối Db
        $stmt = $conn->prepare($sql); //Chuẩn bị câu lệnh truy vấn
        $stmt->execute([$id]);  // Thực thi câu lệnh 
        $users = $stmt->fetchAll(); //Lấy dữ liệu từ Kqua truy vấn
        return  $users; //Trả về dữ liệu
    }
    public function insertUser($username,$pwd)
    {
        $sql = "INSERT INTO users(username,password) VALUES(?,?)";
        $conn = $this->connect(); //Kết nối db
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username,$pwd]);
    }
}
