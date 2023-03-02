<?php

$arr = [1, 5, 2, 13, 9, 5, 10, 9, 200, 10, 1, 111, 0, -2, 13, 0.1];
echo 'Mảng ban đầu là: <pre>';
print_r ($arr);
echo '</pre>';

$arrSort = [];
$arrMax = $arr[0];
$arrMin = $arr[0];
for ($i = 0; $i < count($arr); $i++){
    // echo $array[$i]. '<br>';
    // ex01
    if ($arrMax <= $arr[$i]) {
        $arrMax = $arr[$i];
    } 
    if ($arrMin >= $arr[$i]) {
        $arrMin = $arr[$i];
    }
    // echo $arr[$i].' và min '.$arrMin.' và max '.$arrMax.'<br>';
}
// Kết quả
echo '<hr>Ex01: Số lớn nhất là: '.$arrMax.'<br>';
echo 'Số nhỏ nhất là: '.$arrMin.'<br>';

// Ex03 VD chèn phần tử vào trước ex02
$arr[] = -5;

// Ex02
for ($i = 0; $i < count($arr); $i++){
    // nếu arr[1]>arr[2] => arr[1]=arr[1]+arr[2]; arr[2]=arr[1]-arr[2]; arr[1]=arr[1]-arr[2];
    $temp = 0;
    for ($j = $i +1; $j < count($arr); $j++){
        if ($arr[$i] > $arr[$j]) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }    
    }
    $arrSort[] = $arr[$i];
}
// Kết quả
echo '<hr>Ex02: Mảng sau sắp xếp: <pre>';
print_r ($arrSort);
echo '</pre>';

// Ex03
// chèn phần tử vào mảng vd nhập sau ex2 

// vị trí k
$k = 0;
$num = 100;
$count = count($arrSort);
// $a = 0;
// echo $count;
for ($i = 0; $i < $count; $i++) {
    if ($num < $arrSort[$i]){
        $k = $i;
        // echo '<h1>Halo </h1>'.$k;
        // $a = 2000;
        break;
    } else {
        $k = $count + 1;
        // echo '<h1>Halo </h1>'.$k;
        // $a = 100;
    }
}
// echo 'a = ' .$k.', ';
for ($i = $count; $i > $k; $i--){
    $arrSort[$i] = $arrSort[$i-1];
    // echo $arrSort[$i].', ';
}
$arrSort[$k]=$num;
    
echo '<hr>Ex03: Mảng sau khi chèn phần tử: '.$num.' ở vị trí thứ '.$k.' là: <pre>';
print_r ($arrSort);
echo '</pre>';