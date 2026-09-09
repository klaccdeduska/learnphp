<?php
$number = array(1, 2, 3);
$number = [1, 2, 3];
var_dump($number[1]);
$number[2] = 5;
var_dump($number);
$test = [1, 'dodik', true, [1, 2, 3]];
var_dump($test);
var_dump($test[3][1]);
 
$test = [
    'name' => 'kakaske',
    'age' => 67,
    'city' => 'Mardu',
    1,
    2,
    3,
    'color' => 'green',
];
var_dump($test);
var_dump($test['name']);
?>