<?php
include_once __DIR__ . '/../../_shared/helpers.php';

return [
    'name' => 'Mitsubishi I-MiEV',
    'production-years' => '2009-2021',
    'description' => "The Mitsubishi I-MiEV (Mitsubishi innovative Electric Vehicle) is an all-electric city car that was produced from 2009 to 2021. <br><br>
                        It was one of the first mass-produced electric vehicles globally, designed to offer an eco-friendly alternative for urban commuting. <br><br>
                        The I-MiEV featured a compact design, making it ideal for city driving, and was equipped with a lithium-ion battery pack that provided a modest range suitable for daily use. It gained popularity for its zero-emission capabilities and low operating costs.",    
    // TODO: add image
    'image' => '',
    'rebagde' => [
        "Peugeot iOn <span class=\"fi fi-fr flag-medium\"></span>",
        "Citroën C-Zero <span class=\"fi fi-fr flag-medium\"></span>",
        "Mitsuoka Like <span class=\"fi fi-jp flag-medium\"></span>",
    ],
    'country-origin-flag' => '<span class="fi fi-jp flag-medium"></span>',
    'engines' => [
        "33 kWh Electric Motor",
    ],
    'assembly-plants' => [
        plantLabel('mizushima'),
    ]
    
];
