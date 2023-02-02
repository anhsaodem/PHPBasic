<?php

/**
 * 
 * Cho trước 1 mảng
 * $numbers = [1, 15, 3, 9, 5]
 * Yêu cầu: 
 * Tìm giá trị lớn nhất, nhỏ nhất của mảng 
 * Sắp xếp mảng theo thứ tự tăng dần (Không sử dụng hàm có sẵn)
 * Chèn vào 1 phần tử nhưng không làm thay đổi thứ tự sắp xếp tăng dần
 */
//1. Tìm max,min
$numbers = [1, 15, 3, 9, 5];
function minValueArr($array)
{
    $min = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
    }
    echo 'Minimum value of array is: ' . $min;
}
function maxValueArr($array)
{
    $max = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > $max) {
            $max = $array[$i];
        }
    }
    echo 'Minimum value of array is: ' . $max;
};
minValueArr($numbers);
echo '<br>';
maxValueArr($numbers);
echo '<br>';

//2. Sắp xếp mảng theo thứ tự tăng dần
function swapNumbers(&$a, &$b) //Hàm đổi chỡ 2 số
{
    $tem = $a;
    $a = $b;
    $b = $tem;
};
function showArray($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
// $m = 4;$n =5;
// swapNumbers($m,$n);
// echo $n;
function sortEncrementArr($array) //Hàm sort elements of array
{
    $N = count($array);
    for ($i = 0; $i < $N; $i++) {
        $minIndex = $i; //Gán index của phần tử nhỏ nhất cho i
        for ($j = $i + 1; $j < $N; $j++) {
            if ($array[$j] < $array[$minIndex]) {
                $minIndex = $j;
            }
        }
        if ($minIndex != $i) {
            swapNumbers($array[$minIndex], $array[$i]);
        }
    }
    return $array;
}
showArray(sortEncrementArr($numbers));
//3. Chèn vào 1 phần tử nhưng không làm thay đổi thứ tự sắp xếp tăng dần
$insertNumber = 4;
array_push($numbers,$insertNumber);
showArray(sortEncrementArr($numbers));
