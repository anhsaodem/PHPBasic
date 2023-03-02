<?php
/**
 * Bai1 : Check valid vietnammese phone number
 * Bắt đầu bằng 0 hoặc +84
 * Có 10 số (+84 là 1 số)
 */
$patern = '/^(0|\+84)\d{9}$/';
$numberValid1 = '+84398689458';
$numberValid2 = '0766745878';
$numberNotValid1 = '+34494949494';
$numberNotValid2 = '034494949494';
$check1 = preg_match($patern,$numberValid1);
$check2 = preg_match($patern,$numberValid2);
$check3 = preg_match($patern,$numberNotValid1);
$check4 = preg_match($patern,$numberNotValid2);

if($check1):
    echo 'Number1 valid';
else:
    echo 'Number1 not valid';
endif;
echo '</br>';
if($check2):
    echo 'Number2 valid';
else:
    echo 'Number2 not valid';
endif;
echo '</br>';
if($check3):
    echo 'Number3 valid';
else:
    echo 'Number3 not valid';
endif;
echo '</br>';
if($check4):
    echo 'Number4 valid';
else:
    echo 'Number4 not valid';
endif;


