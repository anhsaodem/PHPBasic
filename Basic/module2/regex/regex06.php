<?php
/**
 * VD: Kiểm tra email hợp lệ
 * Cấu trúc email: <username>@<domain>.<ext>
 * - username:
 *  + chứa: chữ thường, gạch ngang, gạch dưới, dấu chấm, chữ số
 *  + bắt đầu bằng chữ cái thường
 *  + có độ dài ít nhất là 3
 * * - Domain:
 *  + chứa: chữ thường, gạch ngang, gạch dưới, dấu chấm, chữ số
 *  + bắt đầu bằng chữ cái thường
 *  + có độ dài ít nhất là 3
 *  - ext:
 *  + chứa: Chữ thường
 *  + độ dài >=2
 */
$email = 'hoangan.web@gmail.com';
$pattern = '/^[a-z]+[a-z-_\.0-9]{2,}@[a-z]+[a-z-_\.0-9]{2,}\.[a-z]{2,}$/';
$check = preg_match($pattern,$email);
var_dump($check);