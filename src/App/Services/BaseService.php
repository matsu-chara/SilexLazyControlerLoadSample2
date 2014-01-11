<?php

namespace App\Services;

class BaseService
{

    public function __construct($monolog)
    {
        $monolog->addInfo("baseService constructed");
    }

}
