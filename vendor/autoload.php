<?php

spl_autoload_register(function ($className) {

    $baseDir = dirname(__DIR__); // racine du projet

    $paths = [
        'controllers/',
        'managers/',
        'models/',
        
    ];

    foreach ($paths as $path) {
        $file = $baseDir . $path . $className . '.php';

        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
