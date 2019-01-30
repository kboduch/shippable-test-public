<?php

declare(strict_types=1);

namespace spec;

use DummyInterface;
use PhpSpec\ObjectBehavior;

class DummySpec extends ObjectBehavior
{
    public function let(): void
    {
        $this->beConstructedWith('Bob');
    }

    public function it_implements_dummy_interface(): void
    {
        $this->shouldImplement(DummyInterface::class);
    }

    public function it_returns_name(): void
    {
        $this->hello()->shouldReturn('Hello Bob');
    }
}
