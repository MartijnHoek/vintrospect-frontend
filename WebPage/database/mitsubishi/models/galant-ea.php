<?php
include_once __DIR__ . '/../../_shared/helpers.php';

return [
    'name' => 'Mitsubishi Galant (EA)',
    'production-years' => '1996-2006',
    'description' => "The Mitsubishi Galant (EA) is a mid-size car that was produced from 1996 to 2006. <br><br>
                        It featured a more refined design compared to its predecessor, with an emphasis on comfort, safety, and performance. <br><br>
                        It was available in various body styles, including sedan and wagon variants, and offered a wide range of engine options to cater to different market needs. It was known for its smooth ride, spacious interior, and advanced features for its time.",
    
    'image' => '/images/mitsubishi/galant-ea.png',
    'rebagde' => [
        "Mitsubishi Legnum (Station wagon) <span class=\"fi fi-jp flag-medium\"></span>",
        "Mitsubishi Aspire (Sedan) <span class=\"fi fi-jp flag-medium\"></span>",
    ],
    'country-origin-flag' => '<span class="fi fi-jp flag-medium"></span>',
    'engines' => [
        "1.8L I4 Gasoline NA (4G93)",
        "2.0L I4 Gasoline NA (4G63)",
        "2.0L I4 Gasoline NA (4G94)",
        "2.0L V6 Gasoline NA (6A12)",
        "2.4L I4 Gasoline NA (4G64)",
        "2.5L V6 Gasoline NA (6A13)",
        "2.5L V6 Gasoline Twin-Turbo (6A13TT)",
        "3.0L V6 Gasoline NA (6G72)",
        "2.0L I4 Diesel Turbo (4D68T)",
    ],
    'assembly-plants' => [
        plantLabel('nagoya'),
        plantLabel('diamond-star-motors'),
        plantLabel('cainta'),
        plantLabel('pademangan'),
        plantLabel('porirua'),
        plantLabel('cmc'),
        plantLabel('barcelona'),
    ]
    
];
