<?php

// Function which prints "Hello I am Zura"

function first($name){
    echo "hey bro $name<br>";
}
first('Aslam');

// Function with argument

function second($names){
    return "Hey $names <br>";
}
echo second('Dude');

// Create sum of two functions

function sum($a, $b){
    return $a+$b;
}
echo sum(55, 66).'<br>';

// Create function to sum all numbers using ...$nums

function summ(...$nums){
    $sum = 0;
    foreach($nums as $num){
        $sum += $num;
    }
    return $sum;
}
echo summ(2,3,3,4,5,5,6,1).'<br>';

// Arrow functions

function sumo(...$nums){
    return array_reduce($nums, fn($i, $n)=>$i+$n);
}
echo summ(2,3,3,4,5,5,6,1).'<br>';
