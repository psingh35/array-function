<?php
$animals = array("panda", "aplaca", "boa");

function animalsList($animals)
{
    sort($animals);
    //count the animals
    foreach ($animals as $eachAnimal)
    { echo $eachAnimal.' ';}
    echo "<br>";
}