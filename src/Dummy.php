<?php

declare(strict_types=1);

class Dummy implements DummyInterface
{
    /** @var string */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function hello(): string
    {
        return 'Hello ' . $this->name;
    }
}
