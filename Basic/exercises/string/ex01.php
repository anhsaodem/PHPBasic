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
echo '<br>';

// 8. Write a PHP script to format values in currency style. Go to the editor
// Sample values : value1 = 65.45, value2 = 104.35
// Expected Result : 169.80

$value1 = 65.45;
$value2 = 104.35;
echo number_format($value1+$value2,2,'.');
echo '</br>';

// 9. Write a PHP script to generate simple random password [do not use rand() function] from a given string. Go to the editor
// Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
// Note : Password length may be 6, 7, 8 etc.
function password_generate($num_words){
    $sample_str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    $password = substr(str_shuffle($sample_str),0,$num_words);
return $password;
}
echo password_generate(5);
echo '</br>';

// 10. Write a PHP script to replace the first 'the' of the following string with 'That'. Go to the editor
// Sample date : 'the quick brown fox jumps over the lazy dog.'
// Expected Result : That quick brown fox jumps over the lazy dog.

$sample_str = 'the quick brown fox jumps over the lazy dog.';
echo str_replace('the','That',$sample_str);

// 11. Write a PHP script to find the first character that is different between two strings. Go to the editor
// String1 : 'football'
// String2 : 'footboll'
// Expected Result : First difference between two strings at position 5: "a" vs "o"
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1,$str2);
echo '</br>';
// echo 'First difference two strings at position '.$str_pos.':"'.$str1[$str_pos].'" vs "'.$str2[$str_pos].'"';
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
echo '</br>';

// 12. Write a PHP script to put a string in an array. Go to the editor
// Sample strings : "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
// Expected Result (using var_dump()) : array(4) { [0]=> string(30) "Twinkle, twinkle, little star," [1]=> string(26) "How I wonder what you are." [2]=> string(27) "Up above the world so high," [3]=> string(26) "Like a diamond in the sky." }
$str_samp ="Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
var_dump(explode(',\n',$str_samp));
echo '</br>';
// 13. Write a PHP script to get the filename component of the following path. Go to the editor
// Sample path : "https://www.w3resource.com/index.php"
// Expected Output : 'index'
$path = "https://www.w3resource.com/index.php";
echo basename($path,'.php');
echo '</br>';
