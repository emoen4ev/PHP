<?php

$heading = 'Home';

echo $_SERVER["REQUEST_URI"];

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

if ($_SERVER['REQUEST_URI'] === '/') {
    echo 'bg-gray-900 text-white';
} else {
    echo 'text-gray-300';
}

require "views/index.view.php";