<?php

use Amirniyaz\Framework\Http\Response;

return [
    ['GET', '/', [\App\Controller\HomeController::class, 'index']],
    ['GET', '/posts', [\App\Controller\PostController::class, 'index']],
    ['GET', '/posts/{id:\d+}', [\App\Controller\PostController::class, 'show']]
];