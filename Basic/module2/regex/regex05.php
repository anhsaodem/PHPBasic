<?php
/**
 * Ví dụ kiểm tra username có hợp lệ hay không
 * - chứa: Chữ thường,số, gạch dưới (_). gạch ngang(-), 
 * - Bắt đầu : chữ cái thường
 * 
 */
$subject = '1vova_code';
$pattern = '/^[a-z]+[a-z0-9_-]*$/';
$check = preg_match($pattern,$subject);
var_dump($check);