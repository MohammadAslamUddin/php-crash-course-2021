<?php

// Create simple string

$name = 'Aslam';
$strName1 = 'My name is ' . $name . '<br>';
$strName2 = 'My name is $name. <br>';
$strName3 = "My name is $name.<br>";
echo $strName1 . '<br>';
echo $strName2 . '<br>';
echo $strName3 . '<br>';

// String concatenation

echo 'Hello ' . 'Mr. ' . 'Mohammad ' . 'Aslam ' . 'Uddin.<br>';

// String functions

$str = ' Hello World      ';

echo "1 - " . strlen($str) . '<br>';
echo "2 - " . trim($str) . '<br>';
echo "3 - " . ltrim($str) . '<br>';
echo "4 - " . rtrim($str) . '<br>';
echo "5 - " . str_word_count($str) . '<br>';
echo "6 - " . strrev($str) . '<br>';
echo "7 - " . strtoupper($str) . '<br>';
echo "8 - " . strtolower($str) . '<br>';
echo "9 - " . ucfirst('hello') . '<br>';
echo "10 - " . lcfirst('HELLO') . '<br>';
echo "11 - " . ucwords('hey aslam uddin dabit') . '<br>';
echo "12 - " . strpos($str, 'world') . '<br>';
echo "13 - " . stripos($str, 'World') . '<br>';
echo "14 - " . substr($str, 4, 11) . '<br>';
echo "15 - " . substr($str, 8) . '<br>';
echo "16 - " . str_replace(" ", "*", $str) . '<br>';
echo "17 - " . str_replace("world", "Aslam", $str) . '<br>';
echo "18 - " . str_replace("World", "Mohammad", $str) . '<br>';

// Multiline text and line breaks

$lstring = "
    Hey!
    This is Aslam.
    Who's this?
    Can you explain yourself?
";

echo $lstring . '<br>';
echo nl2br($lstring) . '<br>';

// Multiline text and reserve html tags

$lstring1 = "
    Hey!
    This is <b>Aslam.</b>
    Who's <u>this?</u>
    Can you <i>explain</i> yourself?
";

echo $lstring1 . '<br>';
echo nl2br($lstring1) . '<br>';
echo htmlentities($lstring1) . '<br>';
echo nl2br(htmlentities($lstring1)) . '<br>';

// https://www.php.net/manual/en/ref.strings.php