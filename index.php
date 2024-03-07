<?php
class Fruit{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name= $name;
        $this->color= $color;
    }
    function __destruct(){
        echo " nama buah ini adalah {$this->name} dan warna buah ini adalah {$this->color}.";
    }
    }
    $apple = new Fruit ("Apple", "Merah");
?>