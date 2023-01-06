<?php
// 1. $color = array('white', 'green', 'red', 'blue', 'black');
// Write a script which will display the following string - Go to the editor
// "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
// and the words 'red', 'green' and 'white' will come from $color.

$color = array('white', 'green', 'red', 'blue', 'black');
$str= '"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"'.'and the words \''.$color[1].'\', \''.$color[2].'\' and \''.$color[0].'\' will come from $color';
echo $str;

// 2. $color = array('white', 'green', 'red'') Go to the editor
// Write a PHP script which will display the colors in the following way :
// Output :
// white, green, red,

// .green
// .red
// .white
$colors = ['white','green','red'];
?>
<ul>
    <?php
    foreach($colors as $item){
        echo '<li>'.$item.'</li>';
    }
    ?>
</ul>

<!-- 3. $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country. Go to the editor

Sample Output :
The capital of Netherlands is Amsterdam 
The capital of Greece is Athens 
The capital of Germany is Berlin 
- - - - - - - - - - - - - - - - - - - - - - - - -
- - - - - - - - - - - - - - - - - - - - - - - - - -->
<?php
echo '<h3>Ex3</h3>';
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
foreach($ceu as $country=>$capital){
    echo "The capital of $country is $capital"."</br>";
}
?>
<?php
echo '<h3>Ex4</h3>';
// 4. $x = array(1, 2, 3, 4, 5);
// Delete an element from the above PHP array. After deleting the element, integer keys must be normalized. Go to the editor
// Sample Output :
// array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } 
// array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }
$x= array(1,2,3,4,5);
// array_pop($x);
var_dump($x);
unset($x[3]);
var_dump(array_values($x));

// 5. $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// Write a PHP script to get the first element of the above array. Go to the editor
// Expected result : white
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo '<h3>Ex5</h3>';
echo $color['4'];
echo '<br>';

// 6. Write a PHP script which decodes the following JSON string. Go to the editor
// Sample JSON code :
// {"Title": "The Cuckoos Calling",
// "Author": "Robert Galbraith",
// "Detail": {
// "Publisher": "Little Brown"
// }}
// Expected Output :
// Title : The Cuckoos Calling
// Author : Robert Galbraith
// Publisher : Little Brown
echo '<h3>Ex6</h3>';
$json_sample = '{
    "Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}';
function displayArr($value,$key){
    echo "{$key}: {$value} </br>";
}
$arr = json_decode($json_sample,true);
array_walk_recursive($arr,"displayArr");