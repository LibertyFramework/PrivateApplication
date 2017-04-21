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
$app = new \App\Admin\PrivateApplication([
    'config' => 'admin-development'
]);

//
$app->run(__FILE__);
