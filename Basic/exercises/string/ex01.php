<?php
/**
 * 1. Write a PHP script to : - Go to the editor
*a) transform a string all uppercase letters.
*b) transform a string all lowercase letters.
*c) make a string's first character uppercase.
*d) make a string's first character of all the words uppercase.
 */
//string templates
 $str = "my Name is Tran Xuan Hai";
// a transform a tring all uppercase letters
$str = strtoupper($str);
// b transform a string all lowercase letters
$str = strtolower($str);
//c) make a string's first character uppercase.
$str = ucfirst($str);
//d) make a string's first character of all the words uppercase.
 $str = ucwords($str);
//display string after format

 echo 'Your string: " '.$str.'"</br>';

 //Bai2 Write a PHP script to split the following string. Go to the editor
//Sample string : '082307'
//Expected Output : 08:23:07
$hours = '082307';
$times = substr(chunk_split($hours,2,":"),0,-1);

echo 'Now is: '.$times.'</br>';

// 3. Write a PHP script to check whether a string contains a specific string? Go to the editor
// Sample string : 'The quick brown fox jumps over the lazy dog.'
// Check whether the said string contains the string 'jumps'.

$sample_str = 'The quick brown fox jumpds over the lazy dog.';
$message = str_contains($sample_str,'jumps')? '"'.$sample_str.'" contains "jumps"':$sample_str.'does\'nt contains "jumps"';
echo $message.'</br>';

// 4. Write a PHP script to convert the value of a PHP variable to string. Go to the editor
// Click me to see the solution
$anyVariable = true;
$str_variable = strval($anyVariable);
var_dump($str_variable);
echo '</br>';

// 5. Write a PHP script to extract the file name from the following string. Go to the editor
// Sample String : 'www.example.com/public_html/index.php'
// Expected Output : 'index.php'

$file = 'www.example.com/public_html/index.php';
echo basename($file);
echo '</br>';

// 6. Write a PHP script to extract the user name from the following email ID. Go to the editor
// Sample String : 'rayy@example.com'
// Expected Output : 'rayy'
$email = 'chan.volodya@gmail.com';
echo strstr($email,'@',before_needle:true);
echo '</br>';

// 7. Write a PHP script to get the last three characters of a string. Go to the editor
// Sample String : 'rayy@example.com'
// Expected Output : 'com'

echo substr($email,-3) ;