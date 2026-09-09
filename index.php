<?php
$number = array(1, 2, 3);
$number = [1, 2, 3];
var_dump($number[1]);
$number[2] = 5;
var_dump($number);
$test = [1, 'budik', true, [1, 2, 3]];
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
    'music' => 'pop',
    5,
    100 => 6,
    7,
];
var_dump($test);
var_dump($test['name']);

$combined = [1,2,3] + [4,5,6,7];
var_dump($combined);

$text = implode('-', $test);
var_dump($text);

array($test, 67, 'vue', 52);
var_dump($text);
$test[] = 'value';
unset($test[102]);
var_dump($test);
?>