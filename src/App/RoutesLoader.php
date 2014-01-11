<?php

namespace App;

use Silex\Application;

class RoutesLoader
{
    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->instantiateControllers();

    }

    private function instantiateControllers()
    {
        $this->app['lazyDummy.controller'] = $this->app->share(function () {
            return new Controllers\LazyDummyController($this->app['monolog'], $this->app['baseServiceForLazy']);
        });

        $this->app['lazyDummy2.controller'] = $this->app->share(function () {
            return new Controllers\LazyDummy2Controller($this->app['monolog']);
        });
    }

    public function bindRoutesToControllers()
    {
        $api = $this->app["controllers_factory"];

        $api->get('/dummy', "lazyDummy.controller:getDummy");
        $api->get('/dummy2', "lazyDummy2.controller:getDummy");

        $this->app->mount($this->app["api.endpoint"].'/'.$this->app["api.version"], $api);
    }
}

