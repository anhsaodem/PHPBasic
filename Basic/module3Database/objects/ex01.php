<?php
//làm thế nào đẻ tạo object trong php
/**
 * C1: Convert từ array - ép kiểu
 * C2: Tạo class -> create object
 * C3: Tạo object từ class rỗng stdClass
 * 
 */

//C1:
$customer = [
    'name' => 'Hai',
    'email' => 'chan.volodya@gmail.com'
];
$obj = (object)$customer;
echo $obj->name;

//C2:
class Person
{
    public $name;
    public $age;
    const MSG = "Hello";
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function getName()
    {
        return $this->name;
    }
}

$per1 = new Person("Volodya", 23);
echo '</br>';
echo Person::MSG;
echo $per1->getName();
echo '</br>';
echo $per1::MSG;
echo '</br>';

//C3: Tạo objecr 

$customer = new stdClass();
$customer->name = "Xuan Hai";
$customer->email = "chan.volodya@gmail.com";
 echo $customer->email;