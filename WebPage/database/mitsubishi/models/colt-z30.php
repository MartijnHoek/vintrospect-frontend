<?php
include_once __DIR__ . '/../../_shared/helpers.php';

return [
    'name' => 'Mitsubishi Colt (Z30)',
    'production-years' => '2002-2013',
    'description' => "The Mitsubishi Colt (Z30) is a subcompact car. <br>It was available in various body styles, including a three-door hatchback, five-door hatchback, and a convertible variant known as the Colt CZC.
                      <br><br>The Colt (Z30) was known for its compact size, making it suitable for urban driving and maneuverability. It featured a range of engine options, including small-displacement gasoline engines and diesel variants, catering to different market needs.
                      It was praised for its fuel efficiency, ease of handling, and affordability, making it a popular choice among budget-conscious buyers. 
                      <br><br> Throughout its production run, it received various updates and facelifts to keep it competitive in the subcompact segment.",
    'image' => '/images/mitsubishi/colt-z30.png',
    'rebagde' => [
    ],
    'country-origin-flag' => '<span class="fi fi-jp flag-medium"></span>',
    'engines' => [
        '1.1L I3 Gasoline NA (3A91)',
        '1.3L I4 Gasoline NA (4A90)',
        '1.5L I4 Gasoline NA (4A91)',
        '1.5L I4 Gasoline Turbo (4G15)',
        '1.6L I4 Gasoline NA (4G18)',
        '1.5L I3 Diesel Turbo (OM639)',
    ],
    'assembly-plants' => [
        plantLabel('nagoya'),
        plantLabel('nedcar'),
        plantLabel('pininfarina'),
        plantLabel('taoyuan'),
    ]
    
];
