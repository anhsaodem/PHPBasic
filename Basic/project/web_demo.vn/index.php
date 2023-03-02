<?php
require 'lib/template.php';
get_header();
/**
 * B1: Kiem tra va goi thong tin $_GET['mod']$_GET['act']
 * B2: Lay noi dung cua $mod, $act tu Url
 * B3: Tao duong dan 
 * B4: Goi file
 * 
 */
//B1-> B2: kiem tra thong tin bien $_GET['mod'],$_GET['act'] va gan cho $mod,$act
$mod = !empty($_GET['mod'])?$_GET['mod']:'home';
$act = !empty($_GET['act'])?$_GET['act']:'main';
//B3: Tao duong dan
$path = "modules/{$mod}/{$act}.php";
if(file_exists($path)){
    require $path;
}else
{
    require 'inc/404.php';
}
?>


<?php
get_footer();
?>