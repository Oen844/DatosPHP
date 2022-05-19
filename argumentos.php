<?php

// function greet ($name) {
//     return "Hello $name!<br>";
// }


// echo greet("Pau");

$courses = 'PHP';
function path (&$courses) 
{
    echo $courses. "<br>";
    $courses = 'Laravel';
}

path($courses);
echo $courses;

function prdeter ( $name = "Marcos"){

    echo "<br>Hello $name!<br>";
}

prdeter();

prdeter("Pau");

