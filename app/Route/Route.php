<?php
/**
 *
 *
 */

namespace App\Route;

class Route extends \Javanile\Liberty\Route
{
    /**
     *
     *
     */
    public function __contruct($app)
    {
        //
        $this->get('/', 'App\\Module\\Contabilita\\Entity\\Clienti');
    }
}
