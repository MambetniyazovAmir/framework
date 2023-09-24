<?php

namespace Amirniyaz\Framework\Http;
class Response
{
    /**
     * @param string|null $content
     * @param int $status
     * @param array $headers
     */
    public function __construct(
        private ?string $content = '',
        private int     $status = 200,
        private array   $headers = []
    )
    {
    }

    public function send(): void
    {
        echo $this->content;
    }
}
