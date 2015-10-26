<?php

function writeHello() {
    echo "Well met!" . "<br>";
}

function writeMsg($messages) {
    echo $messages . "<br>";

}

function writeMsgTo($name, $message ){
    echo $name . ", your message of the day is: " . $message . "<br>";
}

function addValue ($num1, $num2){
    //echo $num1 + $num2;
    return $num1 + $num2;

}

function calcRect($num3, $num4){
    return $num3 * $num4;
}


