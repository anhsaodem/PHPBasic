<?php
// $subject = 'vovacode.web@gmail.com';
// $subject = 'VOVACODE';
$subject = 'vovacode_web@gmail.com';
$pattern = '/[A-Za-z0-9_@]/';
$check= preg_match($pattern,$subject);
var_dump($check);
?>