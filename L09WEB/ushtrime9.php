<?php

include_once 'header.php';

$cars = array("audi", "fiat", "ford");

echo $cars = [1];

$cars[1] = "bmw";
print_r($cars);
echo "<br>";

echo "1. " . count($cars) . "<br>";
echo "2. " . sizeof($cars);

array_push($cars,"benz");
print_r($cars);
echo "<br>";

array_pop($cars);
print_r($cars);
echo "<br>";

array_unshift($cars,"opel");
print_r($cars);
echo "<br>";

array_shift($cars);
print_r($cars);
echo "<br>";


rsort($cars,);
print_r($cars);
echo "<br>";

$cars2 = ["car1" => "audi",
        "car2" => "bmw",
        "car3" => "ford"];

echo $cars2['car3'];
echo "<br>";

echo $cars2['car3'] = "opel";
echo "<br>";

$keys = array_keys($cars2);

print_r($keys);

$values = array_values($cars2);

print_r($values);
array_push($cars2, "car6", " Q5");
print_r($cars2);

$persons = [
    "person1"=>["name"=>"Filan","surname"=>"Fisteku"],
    "person2"=>["name"=>"Fsta","surname"=>"Rexhe[i"],
    "person3"=>["name"=>"Greta","surname"=>"Ahma"],
];

print_r($persons['person2']);

?>