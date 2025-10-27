<?php
include_once __DIR__ . '/../../_shared/helpers.php';

return [
    'name' => 'Mitsubishi Galant (E50)',
    'production-years' => '1992-1998',
    'description' => "The Mitsubishi Galant (E50) is a mid-size car that was produced from 1992 to 1998. <br><br>
                        It featured a more modern design compared to its predecessor, with improved aerodynamics and a focus on comfort and safety. <br><br>
                        It was available in various body styles, including sedan and wagon variants, and offered a range of engine options to cater to different market needs. It was known for its smooth ride, spacious interior, and advanced features for its time.",
    'image' => '/images/mitsubishi/galant-e50.png',
    'rebagde' => [
    ],
    'country-origin-flag' => '<span class="fi fi-jp flag-medium"></span>',
    'engines' => [
        "1.8L I4 Gasoline NA (4G93)",
        "1.8L V6 Gasoline NA (6A11)",
        "2.0L I4 Gasoline NA (4G63)",
        "2.0L V6 Gasoline NA (6A12)",
        "2.0L V6 Gasoline Twin-Turbo (6A12TT)",
        "2.4L I4 Gasoline NA (4G64)",
        "2.5L V6 Gasoline NA (6G73)",
        "2.0L I4 Diesel Turbo (4D68T)",
    ],
    'assembly-plants' => [
        plantLabel('nagoya'),
        plantLabel('diamond-star-motors'),
        plantLabel('cainta'),
        plantLabel('laem-chabang'),
        plantLabel('pademangan'),
        plantLabel('porirua'),
    ],    
];
