<?php

class box {
    public $width;
    public $height;
    public $length;

    public function volume() {
        return $this->width * $this->height * $this->length;
    }
}

class MetalBox extends box {
    public $weightPerUnit;
    public function mass() {
        return $this->weightPerUnit * $this->volume();
    }
}

$metall = new MetalBox();
var_dump($metall);
?>