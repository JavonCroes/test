<?php

$pets = [
    [
        'species' => 'Hond',
        'name' => 'Buddy',
        'age' => 3
    ],
    [
        'species' => 'Papegaai',
        'name' => 'Coco',
        'age' => 5
    ],
    [
        'species' => 'Konijn',
        'name' => 'Nibbles',
        'age' => 2
    ]
];


echo $pets[2]['name'] . ' is een ' . $pets[2]['species'] . PHP_EOL;

$pets[1]['age']++;

$pets[] = [
    'species' => 'Kat',
    'name' => 'Simba',
    'age' => 2
];

print_r($pets);

?>