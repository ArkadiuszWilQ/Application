<?php

include_once 'functions.php';
include_once 'constants.php';

$autoloader = require __DIR__ . '/vendor/autoload.php';
$autoloader->addPsr4('Classes\\', __DIR__ . DIRECTORY_SEPARATOR . 'Classes');
$autoloader->addPsr4('Controllers\\', __DIR__ . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR . 'Controllers');

//$test = new \Classes\Config\Reader();
//$test->load('database');
//dd($test->read('database'));

$app = new \Classes\Core\Application();
$app->run();

//$configReader = new Classes\Config\Reader();
//$configReader->load('databa   se');
//$user = $configReader->read('user'); // root

//$test = new \Classes\Config\Request();
//$test->getFromGET();

//$insert = "INSERT INTO `first_task`.`test` (`key`, `value`) VALUES (''); ";
//$update = "UPDATE `first_task`.`test` SET `key` = ,`value`='' WHERE  `id`= ; ";
//$delete = "DELETE FROM `first_task`.`test` WHERE  `id`= ; ";
//$select = "SELECT * FROM `first_task`.`test` ";
//$connection1 = new Classes\Database\Connection('database');
//$connection2 = new Classes\Database\Connection('database2');