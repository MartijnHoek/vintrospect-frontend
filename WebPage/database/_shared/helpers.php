<?php
function plantLabel($key) {
    static $plants = null;
    if ($plants === null) {
        $plants = include __DIR__ . '/plants.php';
    }

    if (!isset($plants[$key])) return 'Unknown Plant';
    
    return $plants[$key]['name'] . ' ' . $plants[$key]['flag'];
}
