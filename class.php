<?php
class Car{
    public $name;
    // public $color;

function set_name($name){
    $this->name=$name;
}
function get_name(){
    return $this->name;
}

}
$toyota =new Car();
$toyota->set_name('Toyota');
echo $toyota->get_name();
?>