<?php
//Model
class UserModel extends Db{
    public function getUserStmt($id)   //Lây dữ liệu với điều kiện 
    {
        $sql = "SELECT * FROM users WHERE id > ?";
        $conn = $this->connect(); //Kết nối Db
        $stmt = $conn->prepare($sql); //Chuẩn bị câu lệnh truy vấn
        $stmt->execute([$id]);  // Thực thi câu lệnh 
        $users = $stmt->fetchAll(); //Lấy dữ liệu từ Kqua truy vấn
        return  $users; //Trả về dữ liệu
    } 
}