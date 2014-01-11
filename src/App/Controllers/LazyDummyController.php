<?php

namespace App\Controllers;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Monolog\Logger;
use App\Services\NotesService;

class lazyDummyController
{

    protected $monolog;
    protected $bs;

    public function __construct(Logger $monolog, $baseServiceForLazy)
    {
        $this->monolog = $monolog;
        $this->monolog->addInfo("lazyDummy constructed");
    }

    public function getDummy()
    {
        $this->monolog->addInfo("getDummy");
        return "dummy";
    }
}
