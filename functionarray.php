<?php
$animals = array("panda", "aplaca", "boa");
//add a git here
function animalsList($animals)
{
    sort($animals);
    //count the animals
    foreach ($animals as $eachAnimal)
    { echo $eachAnimal.' ';}
    echo "<br>";
}
function add($animals, $item) {
    echo "adding $item..<br>";
    $convStr = strtolower($item);
    if(!in_array($convStr, $animals)) {
        array_push($animals, $convStr);
    }
    return $animals;
}
animalsList($animals);
$animals = add($animals, 'goat');
animalsList($animals);
$animals = add($animals, 'Boa');
animalsList($animals);

echo "<br>";
//added git here
$cupcakeFlav = array("grasshopper"=>"The Grasshopper","maple"=>"Whiskey Maple Bacon",
    "carrot"=>"Carrot Walnut","caramel"=>"Salted Caramel Cupcake","velvet"=>"Red Velvet",
    "lemon"=>"Lemon Drop","tiramisu"=>"Tiramisu");
//added git here
function flavors($flav){
    foreach ($flav as $k => $v){
        echo "<input type='checkbox' name='flavors[]' value='$k'> $v<br>";
    }
}

flavors($cupcakeFlav);