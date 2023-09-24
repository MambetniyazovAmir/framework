<?php

namespace App\Controller;

use Amirniyaz\Framework\Http\Response;

class PostController
{
    public function index(): Response
    {
        $content = "<h1>Hello posts</h1>";

        return new Response($content);
    }

    public function show(int $id): Response
    {
        $content = "<h1>Hello post {$id}</h1>";
        return new Response($content);
    }
}