<?php

$wishes =  ['javascript', 'php', 'laravel', 'vue.js'];
$courses = ['javascript', 'php'];

echo "<pre>";
var_dump(array_diff($wishes, $courses));

$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];

var_dump(array_diff($arrayA, $arrayB));
var_dump(array_diff($arrayB, $arrayA));


