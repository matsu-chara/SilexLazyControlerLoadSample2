<?php

namespace App\Services;

class BaseServiceForLazy
{

    public function __construct($monolog)
    {
        $monolog->addInfo("baseServiceForLazy constructed");
    }

}
