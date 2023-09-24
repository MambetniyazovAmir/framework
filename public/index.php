<?php

use Amirniyaz\Framework\Http\Kernel;
use Amirniyaz\Framework\Http\Request;
use Amirniyaz\Framework\Http\Response;

define('BASE_PATH', dirname(__DIR__ ));

require_once dirname(__DIR__) . '/vendor/autoload.php';


// receive requests

$request = Request::createFromGlobals();

$kernel = new Kernel();

$response = $kernel->handle($request);

$response->send();