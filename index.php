<?php

// $data = 'Estudio PHP';

// echo $data[0];
// echo "$data{0}";

// $post = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero dignissimos maiores porro placeat ex voluptates aliquid in laboriosam possimus voluptatem! Sequi expedita deleniti impedit eveniet. Quibusdam facilis vel neque incidunt";
// $extract = substr($post, 0, 20);

// echo "$extract...[ver mas]";

// $data = "javascript, php, laravel";

// $tags = explode(',', $data);

// echo "<pre>";
// var_dump($tags);
// echo "</pre>";

$courses = ['javascript', 'php', 'laravel'];
echo implode(', ', $courses);

$course = "   Curso de php    ";
$course = trim($course);
echo '<pre>';
echo "Quiero aprender $course y otro texto";

