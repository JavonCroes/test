<?php

$books = array(
    'book1' => array(
        'title' => '1984',
        'author' => 'George Orwell',
        'pages' => 350
    ),
    'book2' => array(
        'title' => 'Brave New World',
        'author' => 'Aldous Huxley',
        'pages' => 311
    ),
    'book3' => array(
        'title' => 'Fahrenheit 451',
        'author' => 'Ray Bradbury',
        'pages' => 256
    )
);

echo $books['book2']['title'] . ' is geschreven door ' . $books['book2']['author'] . "\n";

$books['book1']['pages'] = 350;

$books['book4'] = array(
    'title' => 'De Ontdekking van de Hemel',
    'author' => 'Harry Mulisch',
    'pages' => 900
);

print_r($books);

?>