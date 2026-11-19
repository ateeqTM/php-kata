<?php

declare(strict_types=1);

namespace Ateeq\PhpKata;

use Exception;
use Psr\Container\NotFoundExceptionInterface;

class NotFoundException extends Exception implements NotFoundExceptionInterface
{
}
