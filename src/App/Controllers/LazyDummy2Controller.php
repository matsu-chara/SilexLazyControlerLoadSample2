<?php

namespace App\Controllers;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Monolog\Logger;
use App\Services\NotesService;

class lazyDummy2Controller
{

    protected $monolog;

    public function __construct(Logger $monolog)
    {
        $this->monolog = $monolog;
        $this->monolog->addInfo("lazyDummy2 constructed");
    }

    public function getDummy()
    {
        $this->monolog->addInfo("getDummy");
        return "dummy2";
    }
}
