<?php
/**
 *
 *
 */

//
require_once '../vendor/autoload.php';

//
spl_autoload_register(new \Javanile\Liberty\Autoload());

//
$app = new \App\PrivateApplication([
    'config' => 'main-development'
]);

//
$app->run(__FILE__);