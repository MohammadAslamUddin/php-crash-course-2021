<?php

// Create array

$fruits = ["Jackfruit", "Mango","Banana","Orange"];

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index

echo $fruits[1].'<br>';

// Set element by index

$fruits[2] = "Apple";
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2

echo "1 -   ".isset($fruits[4]).'<br>'; //false
echo "2 -   ".isset($fruits[3]).'<br>'; //true

// Append element

$fruits[] = "Banana";
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array

echo count($fruits).'<br>';

// Add element at the end of the array

array_push($fruits, "Grapes");
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array

echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array

array_unshift($fruits, "Watermilon");
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array

echo array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Split the string into an array

$string = "Bangladesh,India,Japan,Germany";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

// Combine array elements into string

echo implode(" & ", $fruits);

// Check if element exist in the array

echo '<pre>';
var_dump(in_array('Apple', $fruits));
echo '</pre>';

echo '<pre>';
var_dump(in_array('Japan', $fruits));
echo '</pre>';

// Search element index in the array

echo '<pre>';
var_dump(array_search('Apple', $fruits));
echo '</pre>';

// Merge two arrays

$veg = ["Potato", "Cucumber"];

echo '<pre>';
var_dump(array_merge($veg, $fruits));
echo '</pre>';

// Sorting of array (Reverse order also)

echo '<pre>';
var_dump($fruits);
echo '</pre>';

sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

rsort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$person = [
    'firstName' => 'Mohammad Aslam',
    'lastName' => 'Uddin',
    'age' => 24,
    'hobbies' => ["cycling", "Walking", "Running"]
];
echo '<pre>';
var_dump($person);
echo '</pre>';

// Get element by key

echo $person['age'].'<br>';
echo $person['address'].'<br>'; //its not in the arrya thats why
echo '<pre>';
echo var_dump($person['hobbies']);
echo '</pre>';

// Set element by key

$person['mobile'] = "+8801825317029";
echo '<pre>';
echo var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4

/* if(!isset($person['address'])){
    $person['address']='Boalkhali';
}
echo '<pre>';
echo var_dump($person);
echo '</pre>'; 

$person['address'] = $person['address']?? 'unknown';
echo '<pre>';
echo var_dump($person);
echo '</pre>';*/

$person['address'] ??= 'unknown';
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
ksort($person);#sort by keys
echo '<pre>';
echo var_dump($person);
echo '</pre>';

asort($person); #Sort by values
echo '<pre>';
echo var_dump($person);
echo '</pre>';

// Two dimensional arrays

$persons = [
    ['name'=> 'Mohammad Aslam uddin', 'age' => 24],
    ['name'=> 'Hasan uddin', 'age'=>21]
];
echo '<pre>';
echo var_dump($persons);
echo '</pre>';
