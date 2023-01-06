<?php
$arr = ['PHP','JS','PYTHON','C++'];
//Check notempty and is_array
if(!empty($arr)&&is_array($arr)){
    foreach($arr as $key => $value){
        echo "{$key} : {$value}".'</br>';
    }
}

