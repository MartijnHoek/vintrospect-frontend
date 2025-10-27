<?php
// Get the requested path and clean it
$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Split into parts
$parts = explode('/', $request);

// Require at least brand and model
if (count($parts) < 2) {
    http_response_code(404);
    die("Page not found");
}

$brand = $parts[0];
$model = $parts[1];

// Strato: database folder is in the same folder as this script
$modelFile = __DIR__ . "/database/$brand/models/$model.php";

// Check if the model file exists
if (!file_exists($modelFile)) {
    http_response_code(404);
    die("Model not found: $brand/$model<br>Looking for file at: $modelFile");
}

// Include the model data
$modelData = include($modelFile);

// Load your existing template for layout/styling
include __DIR__ . "/model-template.php";
