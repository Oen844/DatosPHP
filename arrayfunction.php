<?php

$course = [
    10 =>'php', 
    20 =>'laravel', 
    40 =>'javascript', 
    80 => 'vue.js'];

krsort($course);  // Ordena o array alfabéticamente y con rsort también lo hace al revés

echo "<pre>";
var_dump($course);


var_dump(array_slice($course, 1));
var_dump(array_chunk($course, 2));




