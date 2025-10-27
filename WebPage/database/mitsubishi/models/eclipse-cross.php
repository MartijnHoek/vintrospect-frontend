<?php
include_once __DIR__ . '/../../_shared/helpers.php';

return [
    'name' => 'Mitsubishi Eclipse Cross',
    'production-years' => '2018-present',
    'description' => "The Mitsubishi Eclipse Cross is a compact crossover SUV that was first introduced in 2017 for the 2018 model year. <br><br>
                        It features a sleek and sporty design, combining elements of a coupe with the practicality of an SUV. The Eclipse Cross offers a range of engine options, including turbocharged variants, and is available with both front-wheel drive and all-wheel drive configurations. <br><br>
                        The Eclipse Cross is designed to offer a balance of performance, style, and versatility for urban and suburban driving.",
    'image' => '/images/mitsubishi/eclipse-cross.png',
    'rebagde' => [
    ],
    'country-origin-flag' => '<span class="fi fi-jp flag-medium"></span>',
    'engines' => [
        "1.5L I4 Gasoline Turbo (4B40T)",
        "2.0L I4 Gasoline NA (4B11)",
        "2.4L I4 Gasoline/Hybrid NA (4B12)",
        "2.2L I4 Diesel Turbo (4N14)",
    ],
    'assembly-plants' => [
        plantLabel('okazaki'),
        plantLabel('changsha'),
        plantLabel('hpe-automotores'),
    ]
    
];
