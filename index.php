<?php

include_once 'functions.php';
include_once 'constants.php';

$loader = require __DIR__ . '/vendor/autoload.php';
$loader->addPsr4('Classes\\', __DIR__ . DIRECTORY_SEPARATOR . 'Classes');

$configReader = new Classes\Config\Reader();
$configReader->load('database');
$user = $configReader->read('user'); // root