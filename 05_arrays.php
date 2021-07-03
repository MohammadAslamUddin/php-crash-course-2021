<?php

// Create array

$country = ['Bangladesh', 'India', 'NewZeeland','Germany'];

// Print the whole array

echo '<pre>';
var_dump($country).'<br>';
echo '</pre>';

// Get element by index

echo $country[2].'<br>';

// Set element by index

$country[1] = 'Pakistan';
echo '<pre>';
var_dump($country).'<br>';
echo '</pre>';

// Check if array has element at index 2

echo "1 -   ".isset($country[2]).'<br>';
echo "2 -   ".isset($country[4]).'<br>';

// Append element

$country[] = "Viatnam"; 
echo '<pre>';
var_dump($country).'<br>';
echo '</pre>';

// Print the length of the array

echo count($country).'<br>';

// Add element at the end of the array

array_push($country, 'Somalia');
echo '<pre>';
var_dump($country).'<br>';
echo '</pre>';

// Remove element from the end of the array

array_pop($country);
echo '<pre>';
var_dump($country).'<br>';
echo '</pre>';

// Add element at the beginning of the array

array_unshift($country,'Nayjeria');
echo '<pre>';
var_dump($country).'<br>';
echo '</pre>';

// Remove element from the beginning of the array

array_shift($country);
echo '<pre>';
var_dump($country).'<br>';
echo '</pre>';

// Split the string into an array

$fruits = "JackFruits, Banana, Orange, Apple, Grapes, Guava";
echo '<pre>';
var_dump(explode(",",$fruits)).'<br>';
echo '</pre>';

// Combine array elements into string

echo '<pre>';
var_dump(implode(", ",$country)).'<br>';
echo '</pre>';

// Check if element exist in the array

echo '<pre>';
var_dump(in_array("Bangladesh",$country)).'<br>';
echo '</pre>';

// Search element index in the array

echo '<pre>';
var_dump(array_search("Bangladesh",$country)).'<br>';
echo '</pre>';

// Merge two arrays

$places = ["CHI", "DHA", "RHI"];
echo '<pre>';
var_dump(array_merge($places,$country)).'<br>';
echo '</pre>';

// Sorting of array (Reverse order also)

echo '<pre>';
var_dump($places).'<br>';
echo '</pre>';

sort($places);
echo '<pre>';
var_dump($places).'<br>';
echo '</pre>';

rsort($places);
echo '<pre>';
var_dump($places).'<br>';
echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$person = [
    'firstName' => 'Mohammad Aslam',
    'lastName' => 'Uddin',
    'age' => 23,
    'hobbies' => ["cycling","walking","running","gardening"]
];

echo '<pre>';
var_dump($person).'<br>';
echo '</pre>';

// Get element by key

echo $person['age'].'<br>';
echo '<pre>';
echo var_dump($person['hobbies']);
echo '</pre>';

// Set element by key

$person['mobile'] = '+8801825317029';
echo '<pre>';
echo var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4

/*if(!isset($person['address'])){
    $person['address'] = 'Boalkhali';
}
echo '<pre>';
echo var_dump($person);
echo '</pre>';

$person['address'] = $person['address'] ?? 'unknown';
echo '<pre>';
echo var_dump($person);
echo '</pre>';*/

$person['address'] ??= 'kodhurkil';
echo '<pre>';
echo var_dump($person);
echo '</pre>';

// Check if array has specific key

// Print the keys of the array

echo '<pre>';
echo var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array

echo '<pre>';
echo var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys

ksort($person);
echo '<pre>';
echo var_dump($person);
echo '</pre>';

asort($person);
echo '<pre>';
echo var_dump($person);
echo '</pre>';

// Two dimensional arrays

$persons = [
    ['name' => 'Aslam Uddin', 'age' => 23],
    ['name' => 'Hasan Uddin', 'age' => 21]
];
echo '<pre>';
echo var_dump($persons);
echo '</pre>';