<?php
$subject = '123vovacode@gmail.com';
$pattern = '/[a-z]{3,5}/';
$check = preg_match($pattern,$subject);
var_dump($check);