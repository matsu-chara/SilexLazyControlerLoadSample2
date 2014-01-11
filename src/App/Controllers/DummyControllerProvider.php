<?php

namespace App\Controllers;
use Silex\Application;
use Silex\ControllerProviderInterface;
use Silex\ControllerCollection;
use Monolog\Logger;

class DummyControllerProvider implements ControllerProviderInterface
{
    protected $monolog;

    public function __construct(Logger $monolog, $baseService){
        $this->monolog = $monolog;
        $this->monolog->addInfo("Dummy constructed");
    }

    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function(Application $app) {
            return "dummy";
        });

        return $controllers;
    }
}