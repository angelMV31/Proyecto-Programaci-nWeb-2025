<?php
require_once __DIR__ . '/config.php';

define('BASE_PATH', dirname(__DIR__, 2)); 

// http://localhost/ProyectoFinal/public
define('BASE_URL', 'http://localhost/ProyectoFinal/public');

define('ASSETS_URL', BASE_URL . '/files');
define('CSS_URL', BASE_URL . '/css');

define('VIEWS_PATH', BASE_PATH . '/public/views');

function view($viewName, $data = []) {
    extract($data);
    $viewFile = VIEWS_PATH . '/' . $viewName . '.php';

    if (file_exists($viewFile)) {
        include $viewFile;
    } else {
        echo "Vista no encontrada: $viewFile";
    }
}

function asset($file) {
    return ASSETS_URL . '/' . ltrim($file, '/');
}

function css($file) {
    return CSS_URL . '/' . ltrim($file, '/');
}

function url($path) {
    return BASE_URL . '/' . ltrim($path, '/');
}
