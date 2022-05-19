<?php

// $greet = function($name)
// {
//     return "Hello $name!<br>";
// };

// echo $greet('Pau');


function greet (Closure $land, $name)
{
    return $land($name);
}

$es = function($name)
{
    return "Hola $name!<br>";
};

$en = function($name)
{
    return "Hello $name!<br>";
};

$fr = function($name)
{
    return "Bonjour $name!<br>";
};

echo greet ($es, 'Pau');

echo greet ($en, 'Paul');

echo greet ($fr, 'Marcos');