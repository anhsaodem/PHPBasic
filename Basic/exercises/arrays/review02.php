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
<!DOCTYPE html>
<html>

<head>
    <title>HTML DROPDOWN</title>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li.action {
            float: right;
        }

        li.action a {
            background-color: red;
        }

        li a,
        .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover,
        .dropdown:hover .dropbtn {
            background-color: rebeccapurple;
        }

        li.dropdown {
            display: inline-block;
        }


        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <?php
    $list_array = [
        [
            'title' => "Home",
            'link' => "#",
            'class' => ''
        ],
        [
            'title' => "News",
            'link' => "#",
            'class' => ''
        ],
        [
            'title' => "Product",
            'link' => "#",
            'class' => 'dropdown',
            'sub' => [
                [
                    'title' => 'Laptop',
                    'link' => '#'
                ],
                [
                    'title' => 'Telephone',
                    'link' => '#'
                ],
                [
                    'title' => 'Tablet',
                    'link' => '#'
                ]
            ],

        ],
        [
            'title' => "Services",
            'link' => "#",
            'class' => 'dropdown',
            'sub' => [
                [
                    'title' => 'Fix',
                    'link' => '#'
                ],
                [
                    'title' => 'Change',
                    'link' => '#'
                ],
                [
                    'title' => 'Others',
                    'link' => '#'
                ]
            ],

        ],
        [
            'title' => "By Now",
            'link' => "#",
            'class' => 'action'
        ],
    ];
    // echo '<pre>';
    // print_r($list_array);
    // echo '</pre>';

    //Duyet mang
    if (!empty($list_array)) {
        echo '<ul>';
        //Duyet mang foreach
        foreach ($list_array as $item) {
            $class = (!empty($item['class'])) ? 'class="' . $item['class'] . '"' : null;
            $class = (!empty($item['sub']))?'class = "dropdown"':$class;
            echo '<li ' . $class . '><a href="' . $item['link'] . '">' . $item['title'] . '</a>';
            //Drop down
            if (!empty($item['sub'])&& is_array($item['sub'])) {
                $subMenu = $item['sub'];
                echo '<div class="dropdown-content">';
                foreach ($subMenu as $itemSubMenu) {
                echo '<a href= "'.$itemSubMenu['link'].'" >'.$itemSubMenu['title'].'</a>';
                }
                echo '</div>';
            }


            echo '</li>';
        }
        echo '</ul>';
    }
    ?>

    <!-- <ul>

        <li><a href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </li>
    </ul> -->

    <h3>Dropdown Menu inside a Navigation Bar</h3>
    <p>Hover over the "Dropdown" link to see the dropdown menu.</p>
</body>

</html>


?>