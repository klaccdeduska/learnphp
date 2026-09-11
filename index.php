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
?>