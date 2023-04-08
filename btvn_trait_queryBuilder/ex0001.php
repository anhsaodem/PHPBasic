<?php
require_once 'config.php';
require_once 'function.php';
require_once 'traits/QueryBuilder.php';
require_once 'classes/Database.php';
$db = new Database();
// $users = $db->table("users")->select("*")->get();
$users= Database::table("users")->select('name','id')->where("id",">",8)->get();
showData($users);
// echo $users;