<?php
spl_autoload_register('controllerAutoLoad');

function controllerAutoLoad($className) {
    $path = "controller/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}