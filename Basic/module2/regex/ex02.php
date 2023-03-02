<?php
/**
 * Bài 2: Kiểm tra 1 URL hợp lệ 
 * Cấu trúc URL protocol + www + domain + port + path
 * trong đó: www và port là không bắt buộc
 * Ví dụ: https://unicode.vn/khoa-hoc/lap-trinh-php-nang-cao
 * 
 */
$pattern = '~^(https|http)://(www\.)*[a-z-_0-9]+[a-z-_\.]*\.[a-z]{2,}/[a-z-_0-9\./]*$~';
$url = 'https://www.w3schools.com/php/keyword_endif.asp';
$check = preg_match($pattern,$url);
if($check):
    echo 'URL chuẩn';
else:
    echo 'URL không hợp lệ';
endif;