<?php

/**
 * Bai 2: DATATYPES IN PHP
 */
echo '<h1>WE ARE LEARNING DATATYPES OF PHP</h1>';
//1 integer 
//-Khai bao
//-Convert

$x = 10;
echo $x;
echo '</br>';

$y = (int) 12.3;
echo $y;
echo '</br>';
var_dump($x, $y);
echo '</br>';

//2. Float
$value = 10.455;
echo '<label>Your salary</label>
      <input type = "text" value = ' . $value . '
      > VND</br>';
//3. Boolean
$male = true;
echo $male . '</br>';
var_dump($male);
echo '</br>';

//4. String
$str1 = 'Hello World ';
$str2 = "I am PHP Version 8.0";
$myName = "Tran Xuan Hai";
$len = strlen($myName);
echo $str1 . $str2;
echo '</br>';
echo 'Your name have ' . strlen($myName) . ' letters';
echo '</br>';
// 5. Object
class Student
{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function message()
    {
        $message = 'My name is ' . $this->name . ' and I am ' . $this->age . ' years old';
        return $message;
    }
}

$std1 = new Student("Hoang Phuong Thao", 23);
$std2 = new Student("Tran Bao Trung", 25);
echo $std1->message();
echo '</br>';
var_dump($std1);
echo '</br>';
var_dump($std2);
echo '</br>';
//6 Kieu du lieu array

$arr_numb = [1, 2, 3, 4, 5, 6];
var_dump($arr_numb);
echo '</br>';
$symbles = '';
$arr_symbles = (array)$symbles;
var_dump($symbles);
echo '</br>';
var_dump($arr_symbles);
echo '</br>';
$students = [
    "std1" => [
        "id" => "001",
        "fullName" => "Tran Xuan Hai",
        "age" => 23
    ],
    "std2" => [
        "id" => "002",
        "fullName" => "Tran Van Minh",
        "age" => 23
    ],
    "std3" => [
        "id" => "003",
        "fullName" => "Tran Ngoc Quang",
        "age" => 23
    ]
];
// var_dump($students);
echo '<pre>';
print_r($students);
echo '</pre>';
echo $students["std1"]["fullName"];
echo '</br>';
$products = array([
    "001" => [
        "name" => "Apples",
        "year" => 2022
    ],
    "002" => [
        "name" => "Lenovo",
        "year" => 2022
    ],
    "003" => [
        "name" => "Asus",
        "year" => 2022
    ]
]);
echo '<pre>';
print_r($products);
echo '</pre>';
print_r($products[0]["001"]) ;
echo '</br>';

//7 Kieu du lieu NULL
// $null_var = null;
// var_dump($null_var) ;
//8 Kieu resource
$curl = curl_init();
var_dump($curl);
// $checkType = get_resource_type($curl);
// var_dump($checkType);