<?php
spl_autoload_register('daoAutoLoad');

function daoAutoLoad($className) {
    $path = "dao/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}