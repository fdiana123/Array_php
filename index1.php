<?php
// Simple Array
$fruits = array('apple', 'orange', 'pear');

echo $fruits[0];

// Associative Array
$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

echo $hex['blue'];

$people = [
[
    'first_name' => 'Brad',
    'last_name' => 'traversy',
    'email' => 'brad@gmail.com'
],
[
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com'
],
[
    'first_name' => 'Jane',
    'last_name' => 'traversy',
    'email' => 'jane@gmail.com'
]
];
echo $people[1]['email'];

// var_dump(json_encode($people));