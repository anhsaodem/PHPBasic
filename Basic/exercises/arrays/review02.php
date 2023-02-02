<?php
/*
 * Luyen tap
 * 1.Hien thi menu dropdown da cap su dung mang PHP
 * 2. Hien thi danh sach khách hàng dưới dạng bảng: Bao gồm
 * STT
 * Họ và tên
 * Email
 * Sđt
 * Địa chỉ
 * Lưu ý : Nếu địa chỉ email bị trùng, chỉ giữ lại 1
 * 3. Cho trước đoạn văn bản, yêu cầu đếm số lần xuất hiện các ký tự trong chuỗi và hiện thị kết quả dưới dạng bảng
 * STT
 * Ký tự
 * Số lần xuất hiện
 * */
$customers = [
    [
        "id" => null,
        "fullName" => "Trần Xuân Hải",
        'email' => "chan.volodya@gmail.com",
        'tel' => "0944503055",
        'address' => "Tan Dan - Duc Tho - Ha Tinh"
    ],
    [
        "id" => null,
        "fullName" => "Trần Công Minh",
        'email' => "trancongminh@gmail.com",
        'tel' => "0294929424",
        'address' => "Nguyễn Khang - Cầu giấy - Hà Nội"
    ],
    [
        "id" => null,
        "fullName" => "Trần Hà My",
        'email' => "hamytran@gmail.com",
        'tel' => "0392424990",
        'address' => "Nguyễn Trãi - Thanh Xuân - Hà Nội"
    ],
    [
        "id" => null,
        "fullName" => "Nguyễn Duy Chuẩn",
        'email' => "duychuanr@gmail.com",
        'tel' => "0345991993",
        'address' => "Nghi Bình - Nghi Xuân - Hà Tĩnh"
    ],
    [
        "id" => null,
        "fullName" => "Đào Thị Nguyệt",
        'email' => "nguyetdaothi@gmail.com",
        'tel' => "0978908456",
        'address' => "Duy Tiến - Duy Tiên - Hà Nam"
    ],
    [
        "id" => null,
        "fullName" => "Nguyễn Linh Đan",
        'email' => "linhdannguyen@gmail.com",
        'tel' => "0345993908",
        'address' => "Nghi Kim - Tp Vinh - Nghệ An"
    ], [
        "id" => null,
        "fullName" => "Trần Văn Quyết",
        'email' => "vanquyettran@gmail.com",
        'tel' => "0914980839",
        'address' => "Hòa Hợp - Diễn Châu - Nghệ An"
    ],
    [
        "id" => null,
        "fullName" => "Trần Văn Quyết",
        'email' => "vanquyettran@gmail.com",
        'tel' => "0914980839",
        'address' => "Hòa Hợp - Diễn Châu - Nghệ An"
    ],
    [
        "id" => null,
        "fullName" => "Trần Văn Quyết",
        'email' => "vanquyettran@gmail.com",
        'tel' => "0914980839",
        'address' => "Hòa Hợp - Diễn Châu - Nghệ An"
    ]
];
// Check trùng email
if (!empty($customers) && is_array($customers)) {
    $arrCustomersRepeat = [];
    for ($i = 0; $i < count($customers) - 1; $i++) {
        for ($j = $i + 1; $j < count($customers); $j++) {
            if ($customers[$i]['email'] == $customers[$j]['email']) {
                $arrCustomersRepeat[] = $j;
            }
        }
    }
    print_r($arrCustomersRepeat);
}
//Xóa email trùng
if(isset($arrCustomersRepeat)){
    for($k =0;$k<count($arrCustomersRepeat)-1;$k++){
        echo $customers[$k];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List customer</title>
</head>

<body>
    <h1>LIST CUSTOMERS</h1>
    <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ và tên</th>
                <th>Email</th>
                <th>SĐT</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php if (is_array($customers) && !empty($customers)) {
                $count = 0;
                foreach ($customers as $item) {
                    $count++;
                    echo
                    '<tr>
                    <td>' . $count . '</td>
                    <td>' . $item['fullName'] . '</td>
                    <td>' . $item['email'] . '</td>
                    <td>' . $item['tel'] . '</td>
                    <td>' . $item['address'] . '</td>
                    </tr>';
                }
            } ?>
        </tbody>
    </table>
</body>

</html>