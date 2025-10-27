<?php
include_once __DIR__ . '/../../_shared/helpers.php';

return [
    'name' => 'Mitsubishi 3000GT',
    'production-years' => '1990-2000',
    'description' => 'The Mitsubishi 3000GT is a Japanese sports car.<br> Known for its advanced technology and performance, the 3000GT featured all-wheel drive, active aerodynamics, and a powerful V6 engine.
                      It was available in various trims, including the high-performance VR-4 model, which boasted a twin-turbocharged engine and all-wheel steering. The 3000GT was praised for its blend of performance,
                      comfort, and innovative features, making it a standout in the sports car market during its production years.',
    'image' => '/images/mitsubishi/3000gt.png',
    'rebagde' => [
        'Mitsubishi GTO <span class="fi fi-jp flag-medium"></span>',
        'Dodge Stealth <span class="fi fi-us flag-medium"></span>'
    ],
    'country-origin-flag' => '<span class="fi fi-jp flag-medium"></span>',
    'engines' => [
        '3.0L V6 Gasoline NA SOHC (6G72)',
        '3.0L V6 Gasoline NA DOHC (6G72)',
        '3.0L V6 Gasoline Twin-Turbo DOHC (6G72)'
    ],
    'assembly-plants' => [
        plantLabel('nagoya'),
        ]
    
];
