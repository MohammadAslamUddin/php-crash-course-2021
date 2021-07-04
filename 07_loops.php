<?php

// while

$i = 1;
while($i<10){
    echo "Hello<br>";
    $i++;
}

// Loop with $counter

$i = 1;
while($i<10){
    if($i%2==1)
    echo $i.'<br>';
    $i++;
}

// do - while

$j = 2;
do{
    echo "Bangladesh<br>";
    $j++;
}while($j<5);

// for

for($k = 1; $k<3;$k++){
    if($k%2==0)
    echo "hey bro<br>";
}

// foreach

$veg = ["Potato", "Cucumber"];
foreach($veg as $i => $ve){
    echo $ve.'<br>';
}

// Iterate Over associative array.

$person = [
    'name'=> 'Mohammad Aslam',
    'Roll'=> 1114047878,
    'Age' => 25,
    'address' => 'Boalkhali',
    'hobbies'=> ["Cycling","Walking","Running"]
];
foreach($person as $key => $val){
    if(is_array($val)){
        echo implode(",", $val).'<br>';
    }else
        echo $val.'<br>';
}
