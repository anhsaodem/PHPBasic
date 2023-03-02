<?php
echo time();
echo '<br>';
echo date_default_timezone_get();
echo '<br>';
$time = '2023-02-16 21:30:00';
//Convert to d/m/Y H:i:s
$dateObj = date_create($time);
echo date_format($dateObj,'d/m/Y H:i:s');
echo '=====<br>';
// date_create_from_format
$time = '2023/16/02 21:30:00';
$dateObj = date_create_from_format('Y/d/m H:i:s',$time);
echo date_format($dateObj,'d/m/Y H:i:s');
echo '====<br>';
// CHuyển thành timestamp
echo strtotime($time).'</br>';