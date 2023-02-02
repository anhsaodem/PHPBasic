<?php
$phone = '0388875189';
$pattern = '/^0[0-9]{9}$/';
$check = preg_match($pattern,$phone);
var_dump($check);