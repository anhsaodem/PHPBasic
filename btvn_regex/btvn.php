<!-- Bài 01: Kiểm tra số điện thoại Việt Nam hợp lệ
Bắt đầu bằng số 0 hoặc +84
Có tổng 10 số (+84 quy ước là 1 số) -->
<?php
$subject = '0398695869';
$subject = '+84398695869';
$pattern = '/^0|\+84[0-9]{9}/';
$check = preg_match($pattern, $subject);
$result = $check ? "SDT hợp lệ" : "SĐT không hợp lệ";
echo $result . '</br>';
?>
<!-- Bài 02: Kiểm tra 1 URL hợp lệ
Cấu trúc URL: protocol + www + domain + port + path
Trong đó: www và port là không bắt buộc
Ví dụ: https://unicode.vn/khoa-hoc/lap-trinh-php-nang-cao -->
<?php
$url = 'https://unicode.vn/khoa-hoc/lap-trinh-php-nang-cao';
$pattern = '~^(https|http):\/\/[a-z]+\.[a-z]{2,}\/[a-z0-9_-]+\/[a-z0-9-]+~';
$check = preg_match($pattern, $url);
$result = $check ? "Url hợp lệ" : "Url không hợp lệ";
echo $result . '</br>';
?>
<!-- Bài 03: Kiểm tra 1 thẻ html hợp lệ
1 thẻ html gọi là hợp lệ nếu tuân thủ cấu trúc sau:
<tag attribute1="Value 1" attribute2="Value 2">Content</tag>
Hoặc
<tag attribute1="Value 1" attribute2="Value 2" /> -->
<?php
$tag = '<h1 class="title-page detail" data-module="photo-swipt">Nga nêu cách duy nhất giải quyết cuộc xung đột hiện tại</h1>';
$pattern = '~^<[a-z0-9]+(\s+[a-z_-]+="[^"]+")*(>.+</[a-z0-9]+>|\s/>)~';
$check = preg_match($pattern, $url);
$result = $check ? "Tag hợp lệ" : "Tag không hợp lệ";
echo $result . '</br>';
?>
<!-- Bài 04: Kiểm tra trong 1 nội dung HTML có hình ảnh hợp lệ hay không?
Hướng dẫn: Kiểm tra thẻ chèn hình ảnh hợp lệ
<img attribute1="Value1" src="link" attribute2="Value2" attributen="Value n" />
Hoặc
<img attribute1="Value1" src="link" attribute2="Value2" attributen="Value n" > -->
<?php
$tag = '<a href="/doi-song/tin-nhan-cuoi-gui-vo-cua-phi-cong-gap-nan-tren-vinh-ha-long-20230407145412406.htm"> <img alt="Tin nhắn cuối gửi vợ của phi công gặp nạn trên vịnh Hạ Long" height="156" src="https://icdn.dantri.com.vn/zoom/234_156/2023/04/07/z4245034131050c00b44e2ef494d5c43873d123ddac2e1-edited-crop-1680853962232.jpeg" </a>';
$pattern = '~<img\s+([^"]+="[^"]+")*\ssrc="[^"]+"~';
$check = preg_match($pattern, $url);
$result = $check ? "Img hợp lệ" : "Img không hợp lệ";
echo $result . '</br>';
?>