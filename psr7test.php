<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Nyholm\Psr7\Response;

$original = new Response(200, [], 'Hello');
$changed = $original->withStatus(404);

echo $original->getStatusCode() . "\n";
echo $changed->getStatusCode() . "\n";
echo $original->getBody() . "\n";