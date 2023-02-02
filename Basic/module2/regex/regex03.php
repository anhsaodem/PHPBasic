<?php
/**
 * Kiểm tra mk có hợp lệ hay không
 * Bắt đầu bằng chữ cái thường
 * Độ dài lớn hơn hoặc bằng 6
 */
$password = 'abc123';
$pattern = '/^[a-z]*[a-z0-9][0-9]$/';
$check = preg_match($pattern,$password);
$message = $check?"Mật khẩu hợp lệ":"Mật khẩu không hợp lệ";
echo $message;