<?php

$frontend = [
    'frontend' =>'Vue.js',
    
];
$backend = [
    'backend'=> 'PHP',
    'backend'=> 'Laravel',
];

echo "<pre>";
var_dump(array_merge_recursive($frontend, $backend));