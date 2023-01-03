<?php
//Bai 1: Create 1-2-3-4-5-6-7-8-9-10
echo '<h1>Exercies for loop </h1>';
echo '<h2>Bai 1 </h2>';

for ($i = 1; $i <= 10; ++$i) {
    $str = '';
    if ($i < 10) {
        $str .= $i . '-';
    } else {
        $str .= $i;
    }
    echo $str;
}
echo '<h2>Bai 2 </h2>';
//Bai 2: Sum from 0 to 30;
$sum = 0;
for ($j = 0; $j <= 30; $j++) {
    $sum += $j;
}
echo '</br>' . $sum;
echo '</br>';
echo '<h2>Bai 3 </h2>';
//Bai 3
/**
 * *
 * **
 * ***
 * ****
 * *****
 */

for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo '* ';
    }
    echo '</br>';
}
echo '<h2>Bai 4 </h2>';
//Bai 4
/**
 * 
 * *
 * * *
 * * * *
 * * * * *
 * * * * * *
 * * * * *
 * * * * 
 * * *
 * *
 *
 */
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo ' * ';
    }
    echo '</br>';
}
for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j < $i; $j++) {
        echo ' * ';
    }
    echo '</br>';
}
echo '<h2>Bai 5 </h2>';
//Bai 5 tính n!
/**
 * 0!=1
 * 1!=1
 * 2!=1*2
 * 3!=1*2*3
 * 4!=1*2*3*4
 */
//   function fac($n){
//         if($n==0||$n==1){
//             return 1;
//         }else{
//             return $n*fac($n-1);
//         }
//   }

//   $n =2;
//   echo fac($n);

$n = 6;
$x = 1;
for ($i = 1; $i < $n - 1; $i++) {
    $x *= ($i + 1);
}
echo "The factorial of $n = $x.</br>";

echo '<h2>Bai 6 </h2>';
// Bai 6: 
/***
 * 00,01,02,03,04,05,...,11,12,13,...,97,98,99
 * 
 */
for ($i = 0; $i <= 9; $i++) {
    for ($j = 0; $j <= 9; $j++)
        echo '' . $i . $j . ',';
}
echo '</br>';

//Bai 7:
/**
 * Write a program which will count the "r" characters in the text "w3resource"
 */
echo '<h2>Bai 7 </h2>';
$sources = "w3resource";
$count = 0;
for ($i = 0; $i < strlen($sources) - 1; $i++) {
    if ($sources[$i] == "r") {
        $count++;
    }
}
echo 'We have ' . $count . ' letter "r" in "w3resource" </br>';


// Bai 8: Bang cuu chuong
echo '<h2>Bai 8 </h2>';
?>
<table cellpadding="3px" border="3px">
    <?php for ($r = 1; $r <= 9; $r++) { ?>
        <tr>
            <?php for ($col = 1; $col <= 9; $col++) { ?>
                <td><?php echo $r . '*' . $col . ' = ' . $r * $col; ?></td>
            <?php } ?>
        </tr>
    <?php } ?>

</table>

<?php echo '<h2>Bai 9 </h2>'; ?>

<table width = "270px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
        for($row = 1;$row<=8;$row++){
            echo "<tr>";
            for($col = 1; $col<=8;$col++){
                $total=$row+$col;
                if($total%2==0){
                    echo '<td height = 30px width = 30px bgcolor = #FFFFFF></td>';
                }else{
                    echo '<td height = 30px width = 30px bgcolor = #000000></td>';
                }
            }
            echo "</tr>";
        }
    ?>
</table>
<?php echo '<h2>Bai 10 </h2>'; ?>
<?php

/**
 * 1
 * 2 3
 * 4 5 6
 * 7 8 9 10
 * 11 12 12 14 15
 */

$m = 5;
$cout = 1;
for($i=$m;$i>0;$i--){
    for($j=$i;$j<$m+1;$j++){
        printf("%4s",$cout);
        $cout++;
    }
    echo '</br>';
}

?>