<?php

include_once 'functions.php';
include_once 'constants.php';

$autoloader = require __DIR__ . '/vendor/autoload.php';
$autoloader->addPsr4('Classes\\', __DIR__ . DIRECTORY_SEPARATOR . 'Classes');
$autoloader->addPsr4('Controllers\\', __DIR__ . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR . 'Controllers');

$app = new \Classes\Application();
$app->run();

//$configReader = new Classes\Config\Reader();
//$configReader->load('database');
//$user = $configReader->read('user'); // root
//
//
//new Classes\Database\Connection('database');
//new Classes\Database\Connection('database2');