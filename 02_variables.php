<?php

// What is a variable
echo 'A variable is a value that can be chaged depending on the condition of the program.'.'<br>';


// Variable types
echo 'There are different types of variable in php:
    string
    interger
    float
    double
    boolean
    null
    array
    object
    resource'.'<br>';

// Declare variables

$name = "Riyad";
$age = 15;
$isMale = false;
$height = 150.2;
$class = null;

// Print the variables. Explain what is concatenation

echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>';
echo $height.'<br>';
echo $class.'<br>';

// Print types of the variables

echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($class).'<br>';

// Print the whole variable

var_dump($name, $age, $isMale, $height, $class).'<br>';

// Change the value of the variable

$name = 49.4;
echo '<br>';

// Print type of the variable

echo gettype($name).'<br>';

// Variable checking functions

is_string($name); #false
is_integer($age); #true
is_bool($isMale); #true
is_double($height); #true
is_null($class); #true

// Check if variable is defined

isset($name);
isset($address);

// Constants

define('PI', 3.1416);
echo PI.'<br>';

// Using PHP built-in constants

echo SORT_ASC.'<br>';
echo SORT_DESC.'<br>';
echo PHP_INT_MAX.'<br>';
echo PHP_INT_MIN.'<br>';