<?php
for($index = 0; $index < 10; $index++) {
    var_dump($index);
}
for($index = 9; $index >= 0; $index--) {
    var_dump($index);
}
for($index = 1; $index < 1000000; $index*=2) {
    var_dump($index);
}

$time = time();
$count = 0;
while($time+1 > time()) {
    $count++;
}
var_dump($count);

while(false) {
    var_dump('While');
}

do {
    var_dump('Do');
} while(false);

$fruits = ['apple', 'banana', 'cherry'];

for($index = 0; $index < count($fruits); $index++) {
    $fruit = $fruits[$index];
    var_dump($fruits[$index]);
}
foreach($fruits as $fruit) {
    var_dump($fruit);
}
foreach($fruits as $key => $fruit) {
    var_dump($key, $fruit);
}

function recursive($index) {
    var_dump($index);
    if($index < 10) {
        recursive($index+1);
    }
}

recursive(0);
?>