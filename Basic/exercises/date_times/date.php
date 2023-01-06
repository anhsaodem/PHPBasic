<!-- Write a PHP script which will display the copyright information in the following format. To get current year you can use the date() function.

Expected Format : © 2013 PHP Exercises - w3resource -->
<?php
echo '<h3>Ex1</h3>';
echo '@'.date('Y').' PHP Exercises - w3resource';
echo '<h3>Ex2</h3>';
$dateOfBirth = mktime(0,0,0,21,7,2023);
$today = time();
$seconds = -$today+$dateOfBirth;
$dayRemain = $seconds/(60*60*24);
echo 'Birthday after: '.(int)$dayRemain .' days </br>';

// 3. Write a PHP script to print the current date in the following format. To get current date's information you can use the date() function. Go to the editor
// Sample format : (assume current date is September 01, 2013)
// 2013/09/01
// 13.09.01
// 01-09-13
echo '<h3>Ex2- Today is: </h3>';
echo date('Y/m/d');
echo '</br>';
echo date('y.m.d');
echo '</br>';
echo date('d-m-y');
echo '</br>';

// 4. Write a PHP script to calculate the difference between two dates. Go to the editor
// Sample dates : 1981-11-04, 2013-09-04
// Expected Result : 31 years, 10 months, 11 days
echo '<h3>Ex4- Count: </h3>';

$day1 = '1993-07-21';
$day2 = '2023-01-04';
$seconds = strtotime($day2)-strtotime($day1);
$year = floor($seconds/(365*24*60*60));
$month = floor(($seconds-$year*365*24*60*60)/(30*24*60*60));
$day = floor(($seconds-$year*365*24*60*60-$month*30*60*60)/(24*60*60));
echo "$year years, $month months, $day days";

?>