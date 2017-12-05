<?php

include_once 'functions.php';
include_once 'constants.php';

$autoloader = require __DIR__ . '/vendor/autoload.php';
$autoloader->addPsr4('Classes\\', __DIR__ . DIRECTORY_SEPARATOR . 'Classes');

dd($_GET);

//$configReader = new Classes\Config\Reader();
//$configReader->load('database');
//$user = $configReader->read('user'); // root
//
//
//new Classes\Database\Connection('database');
//new Classes\Database\Connection('database2');

$loader = new Twig_Loader_Filesystem(__DIR__ . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR . 'Views');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . DIRECTORY_SEPARATOR . 'Cache',
));

echo $twig->render('index.html', array('name' => 'Fabien'));