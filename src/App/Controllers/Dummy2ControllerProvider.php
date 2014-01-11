<?php

namespace App\Controllers;
use Silex\Application;
use Silex\ControllerProviderInterface;
use Silex\ControllerCollection;
use Monolog\Logger;

class Dummy2ControllerProvider implements ControllerProviderInterface
{
    protected $monolog;

    public function __construct(Logger $monolog){
        $this->monolog = $monolog;
        $this->monolog->addInfo("Dummy2 constructed");
    }

    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function(Application $app) {
            return "dummy2";
        });

        return $controllers;
    }
}