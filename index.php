<?php

class box {
    public $width;
    public $height;
    public $legnth;

    public function volume() {
        return $this->width * $this->height * $this->legnth;
    }
}

$num1 = 1;
$num2 = $num1;
$num1 = 2;
var_dump($num1, $num2);

$box1 = new box();
$box1->width = 1;
$box2 = clone $box1;
$box2->width = $box1->width;
$box1->width = 2;

var_dump($box1, $box2);

?>