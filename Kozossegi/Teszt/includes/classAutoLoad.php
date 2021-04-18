<?php

spl_autoload_register('classAutoLoad');

function classAutoLoad($className) {
    $path = "model/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}

