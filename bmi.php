<?php

function bmiCalc() {
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $result = $weight / ($height * $height);
    echo "Your Body Mass Index is: " . $result . "<br>";
}

bmiCalc();
?>

<a href="form.html">Return to re-calculate.</a>
