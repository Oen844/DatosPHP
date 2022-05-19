<?php

$courses = [
    'backend' => 'PHP',
    'framework' => 'Laravel',
    'frontend' => 'Vue.js'
];

foreach ($courses as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}

function upper($course)
{
    echo strtoupper($course). "<br>";
}

array_walk($courses, 'upper');


