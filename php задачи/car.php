<?php

class car
{
    public $color;//поле
    public $price;//поле

    public function __construct($color, $price){
        //поле       = аргумент
        $this->color = $color;
        $this->price = 200;
    }

    //метод
    public function GetColor(){
        echo "My color is {$this->color}";
    }


}