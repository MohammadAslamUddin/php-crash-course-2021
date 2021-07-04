<?php

$age = 20;
$salary = 300000;

// Sample if

if($age==20)
    echo "20 it is!<br>";

// Without circle braces

if($age!=20) echo "it is not!<br>";

// Sample if-else

if($age!=20)
    echo "Not 20!<br>";
else
    echo "20<br>";

// Difference between == and ===

if($age==20) echo "1    -   "."it is 20!<br>";
if($age=='20') echo "2    -   "."it is 20 string!<br>";
if($age==='20') echo "3    -   "."it is 20 string!<br>";
if($age===20) echo "4    -   "."it is 20!<br>";

// if AND

if($age== 20 && $salary<=300000)
    echo 'Hey bro!<br>';

// if OR

if($age== 20 || $salary<300000)
    echo 'Hey bro!<br>';

// Ternary if

echo $age>22? 'Young<br>' : 'old<br>';

// Short ternary

echo $newAge = $age?:12;
echo '<br>';

// Null coalescing operator

$names = isset($name)? $name :"Aslam<br>";
echo $names;
$myname = $name ?? 'Aslam Uddin<br>';
echo $myname;

// switch

$userRole = 'Wadmin';
switch($userRole){
    case 'admin':
        echo 'Admin<br>';
        break;
    case 'user':
        echo 'User<br>';
        break;
    case 'editor':
        echo 'Editor<br>';
        break;
    default:
        echo 'Invalid Role<br>';
}
