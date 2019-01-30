<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class DummyTest extends TestCase
{
    /**
     * @covers Dummy::__construct
     *
     * @covers Dummy::hello
     */
    public function testHello(): void
    {
        $this->assertSame(
            'Hello John',
            (new Dummy('John'))->hello()
        );
    }
}
