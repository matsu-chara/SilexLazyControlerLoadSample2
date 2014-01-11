<?php

namespace App;

use Silex\Application;

class ServicesLoader
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function bindServicesIntoContainer()
    {
        $this->app['baseService'] = $this->app->share(function(){
            return new Services\baseService($this->app['monolog']);
        });

        $this->app['baseServiceForLazy'] = $this->app->share(function(){
            return new Services\baseServiceForLazy($this->app['monolog']);
        });
    }
}

