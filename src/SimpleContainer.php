<?php

declare(strict_types=1);

namespace Ateeq\PhpKata;

use Psr\Container\ContainerInterface;

class SimpleContainer implements ContainerInterface
{
    /** @var array<string, callable(): mixed> */
    private array $factories = [];

    /** @var array<string, mixed> */
    private array $instances = [];

    /**
     * @param callable(): mixed $factory
     */
    public function set(string $id, callable $factory): void
    {
        $this->factories[$id] = $factory;
    }

    public function has(string $id): bool
    {
        return isset($this->factories[$id]);
    }

    public function get(string $id): mixed
    {
        if (!$this->has($id)) {
            throw new NotFoundException("Service not found: " . $id);
        }

        if (!array_key_exists($id, $this->instances)) {
            $this->instances[$id] = ($this->factories[$id])();
        }

        return $this->instances[$id];
    }
}
