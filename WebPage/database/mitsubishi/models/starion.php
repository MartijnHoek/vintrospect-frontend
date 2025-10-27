<?php
include_once __DIR__ . '/../../_shared/helpers.php';


return [
    'name' => 'Mitsubishi Starion',
    'production-years' => '1982-1989',
    'description' => "The Mitsubishi Starion is a sports car that was produced from 1982 to 1989. <br><br>
                        It was one of the first Japanese turbocharged sports cars, known for its sleek design and impressive performance. <br><br>
                        The Starion featured a rear-wheel-drive layout and was powered by a turbocharged inline-four engine, delivering a thrilling driving experience. It gained popularity for its agility, handling, and distinctive styling, making it a notable contender in the sports car market during the 1980s.",
    // TODO: add image
    'image' => '',
    'rebagde' => [
        "Mitsubishi Colt Starion <span class=\"fi fi-jp flag-medium\"></span>",
        "Chrysler Conquest <span class=\"fi fi-us flag-medium\"></span>",
        "Dodge Conquest <span class=\"fi fi-us flag-medium\"></span>",
        "Plymouth Conquest <span class=\"fi fi-us flag-medium\"></span>",
    ],
    'country-origin-flag' => '<span class="fi fi-jp flag-medium"></span>',
    'engines' => [
        "2.0L I4 Gasoline NA (G63B)",
        "2.0L I4 Gasoline Turbo (G63BT)",
        "2.6L I4 Gasoline Turbo (G54BT)",
    ],
    'assembly-plants' => [
        plantLabel('nagoya'),
    ]
    
];
