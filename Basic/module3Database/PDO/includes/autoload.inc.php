<?php
spl_autoload_register('myAutoload');
function myAutoload($className)
{
    $path = 'classes/';
    $extension = '.class.php';
    $fullPath = $path . $className . $extension;
    if (!file_exists($fullPath)) :
        return false;
    else:
        require_once $fullPath;
    endif;
}
