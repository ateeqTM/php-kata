<?php

declare(strict_types=1);

namespace Ateeq\PhpKata;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ProductController
{
    public function show(ServerRequestInterface $request): ResponseInterface
    {
        $params = $request->getQueryParams();
        $id = $params['id'] ?? null;

        if (!is_string($id) || $id === '') {
            return new Response(
                400,
                ['Content-Type' => 'application/json'],
                '{"error":"id is required"}'
            );
        }

        $body = json_encode(['id' => $id, 'name' => 'Tile'], JSON_THROW_ON_ERROR);

        return new Response(200, ['Content-Type' => 'application/json'], $body);
    }
}
