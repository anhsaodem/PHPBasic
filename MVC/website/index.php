<?php
//FRONT CONTROLLER

//1. General setting ->Sử dụng để debug
ini_set('display_errors', 1);
error_reporting(E_ALL);



// 2. Đính file
define('ROOT', str_replace("\\","/",dirname(__FILE__)));
require_once ROOT."/components/Router.php";


// 3. Connect DB
 

// 4. Call Router
$router = new Router();
$router->run();




?>