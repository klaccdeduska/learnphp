<?php

class box {
    public $width;
    public $height;
    public $legnth;

    public function volume() {
        return $this->width * $this->height * $this->legnth;
    }
}

$box1 = new box();
$box1->width = 1;
$box1->height = 2;
$box1->legnth = 3;
var_dump($box1);
var_dump($box1->volume());

$box2 = new box();
$box2->width = 4;
$box2->height = 5;
$box2->legnth = 6;
var_dump($box2);
var_dump($box2->volume());
var_dump($box1->volume());

?>