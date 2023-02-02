#Regular Expression
Các ký hiệu cơ bản Regular Expression
1. Cú pháp pattern Regex
$pattern = '/pattern string/modifier';
- Dấu / có thể thay thế bằng @,#,~,!...
- Để thực hiện so khớp cần sử dụng hàm preg_match();

*** Cú pháp hàm preg_match();
preg_match($pattern,$subject,$matches);

*** Các ký hiệu cơ bản của Regex
^: So khớp đàu chuỗi
$: So khoeps cuối chuỗi
[min-max]: A-Z, a-z, 0-9;
[list_char]:Các ký tự muốn tìm(chấp nhận ký tự đặc biệt)
{min,max}: Độ dài từ min đến max
{min,}: Độ dài >= min
{max}: Độ dài cố định max