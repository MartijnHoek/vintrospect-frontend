<?php
include_once __DIR__ . '/../../_shared/helpers.php';

return [
    'name' => 'Mitsubishi Galant (E30)',
    'production-years' => '1987-1994',
    'description' => "The Mitsubishi Galant (E30) is a mid-size car that was produced from 1987 to 1994. <br><br>
                        It was available in various body styles, including sedan, wagon, and coupe variants. The E30 Galant featured a range of engine options, including four-cylinder and V6 engines, catering to different market needs. <br><br>
                        Known for its comfortable ride, spacious interior, and solid build quality, the E30 Galant was a popular choice among families and commuters during its production years.",
    'image' => '/images/mitsubishi/galant-e30.png',
    'rebagde' => [
        "Mitsubishi Eterna <span class=\"fi fi-jp flag-medium\"></span>",
        "Dodge 2000GTX <span class=\"fi fi-us flag-medium\"></span>",
        "Eagle 2000GTX <span class=\"fi fi-us flag-medium\"></span>",
    ],
    'country-origin-flag' => '<span class="fi fi-jp flag-medium"></span>',
    'engines' => [
        "1.6L I4 Gasoline NA (4G32)",
        "1.8L I4 Gasoline NA (4G37)",
        "1.8L I4 Gasoline NA (4G67)",
        "2.0L I4 Gasoline NA (4G63)",
        "2.0L I4 Gasoline Turbo (4G63T)",
        "1.7L I4 Diesel Turbo (4D65T)",
    ],
    'assembly-plants' => [
        plantLabel('nagoya'),
        ]
    
];
