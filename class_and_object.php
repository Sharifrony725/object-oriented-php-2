<?php
class Foo{
    public $color;
    function display(){
        echo "Welcome to Bangladesh";
    }
    function setColor($color){
        $this->color = $color;
    }
    function getColor(){
        
    }
}
$foo = new Foo();