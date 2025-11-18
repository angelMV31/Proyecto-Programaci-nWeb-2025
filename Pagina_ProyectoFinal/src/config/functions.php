<?php
require_once __DIR__ . '/config.php';

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

function url($path = '') {
    return rtrim(BASE_URL, '/') . '/' . ltrim($path, '/');
}