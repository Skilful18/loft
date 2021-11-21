<?php

$bmw = [
    'BMW' => [
        'model' => 'X5',
        'speed' => 120,
        'doors' => 5,
        'year' => 2015
    ]
];

$toyota = [
    'TOYOTA' => [
        'model' => "Corolla",
        'speed' => 170,
        'doors' => 5,
        'year' => 2022
    ]
];

$opel = [
    'OPEL' => [
        'model' => "Astra",
        'speed' => 150,
        'doors' => 5,
        'year' => 2021
    ]
];

$cars = array_merge($bmw, $toyota, $opel);

foreach ($cars as $list => $value) {
    echo '<br>' . 'Car' . ' ' . $list . '<br>';
        foreach ($value as $item) {
            echo $item . ' ';
        }
}
