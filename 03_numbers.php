<?php

// Declaring numbers

$a = 58;
$b = 32;

// Arithmetic operations

echo $a+$b.'<br>';
echo $a-$b.'<br>';
echo $a*$b.'<br>';
echo $a/$b.'<br>';

// Assignment with math operators

/*$a += $b; echo $a.'<br>';
$a -= $b; echo $a.'<br>';
$a -= $b; echo $a.'<br>';
$a *= $b; echo $a.'<br>';*/

// Increment operator

echo $a++.'<br>';
echo ++$a.'<br>';

// Decrement operator

echo $a--.'<br>';
echo --$a.'<br>';

// Number checking functions

echo is_float(1.23).'<br>';
echo is_int(1.23).'<br>';
echo is_string("1.23").'<br>';

// Conversion

$strNumber = '12.22';
$number = floatval($strNumber);
$num = intval($strNumber);
echo "1 - ".$strNumber.'<br>';
echo "2 - ".$number.'<br>';
echo "3 - ".$num.'<br>';

// Number functions

echo "abs(-15)" . abs(-15) . '<br>';
echo "pow(3, 4)" . pow(3, 4) . '<br>';
echo "sqrt(9)" . sqrt(9) . '<br>';
echo "max(2, 154, 15, 23)" . max(2, 154, 15, 23) . '<br>';
echo "min(2, 0, 15, -1)" . min(2, 0, 15, -1) . '<br>';
echo "round(2.3)" . round(2.3) . '<br>';
echo "round(2.7)" . round(2.7) . '<br>';
echo "floor(2.6)" . floor(2.6) . '<br>';
echo "ceil(2.4)" . ceil(2.4) . '<br>';

// Formatting numbers

$number = 12398757399.1038954;
echo number_format($number, 4, ".","," );

// https://www.php.net/manual/en/ref.math.php
