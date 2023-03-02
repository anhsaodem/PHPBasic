<?php
$category = [
    1 => [
        'id' => 1,
        'title' => "Xã hội",
        'parent_id' => 0
    ],
    2 => [
        'id' => 2,
        'title' => "Tin trong nước",
        'parent_id' => 1
    ],
    3 => [
        'id' => 3,
        'title' => "Tin quốc tê",
        'parent_id' => 1
    ],
    4 => [
        'id' => 4,
        'title' => "Thể thao",
        'parent_id' => 0
    ],
    5 => [
        'id' => 5,
        'title' => "Ngoại hạng anh",
        'parent_id' => 4
    ],
    6 => [
        'id' => 6,
        'title' => "Laliga",
        'parent_id' => 4
    ],
    7 => [
        'id' => 7,
        'title' => 'Bảng xếp hạng',
        'parent_id' => 5
    ],
    8 => [
        'id' => 8,
        'title' => 'Lịch thi đấu',
        'parent_id' => 5
    ],
    9 => [
        'id' => 9,
        'title' => 'Bảng xếp hạng',
        'parent_id' => 6
    ],
    10 => [
        'id' => 10,
        'title' => 'Lịch thi đấu',
        'parent_id' => 6
    ]
];
//Hàm lấy dữ liệu
function data_tree($data, $parent_id = 0, $level = 0)
{
    $result = [];

    foreach ($data as $item) {
        $item['level'] = $level;
        if ($item['parent_id'] == $parent_id) {
            $result[] = $item;
            $child = data_tree($data, $item['id'], $level + 1);
            $result = array_merge($result, $child);
        }
    }
    return $result;
}
$data = data_tree($category, 0);
echo '<pre>';
print_r($data);
echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul style="list-style:none">
        <?php
        foreach ($data as $item) {
        ?>
            <li><?php echo str_repeat('**', $item['level']) . $item['title']; ?></li>
        <?php
        } ?>
    </ul>

</body>

</html>