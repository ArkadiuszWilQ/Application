<?php

require_once "Classes\Autoload.php";

$loader = new Autoload();
$loader->registerPaths([
    __DIR__,
    __DIR__ . DIRECTORY_SEPARATOR . 'Classes'
]);
