<?php

declare(strict_types=1);

namespace Ateeq\PhpKata\Tests;

use Ateeq\PhpKata\ProductController;
use Nyholm\Psr7\ServerRequest;
use PHPUnit\Framework\TestCase;

class ProductControllerTest extends TestCase
{
    public function testShowReturns400WhenIdIsMissing(): void
    {
        $controller = new ProductController();
        $request = new ServerRequest('GET', '/products');

        $response = $controller->show($request);

        $this->assertSame(400, $response->getStatusCode());
    }

    public function testShowReturns200WhenIdIsGiven(): void
    {
        $controller = new ProductController();
        $request = (new ServerRequest('GET', '/products'))
            ->withQueryParams(['id' => '5']);

        $response = $controller->show($request);

        $this->assertSame(200, $response->getStatusCode());
        $this->assertStringContainsString('"id":"5"', (string) $response->getBody());
    }
}
