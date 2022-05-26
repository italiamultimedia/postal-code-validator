<?php

declare(strict_types=1);

namespace Tests\Test;

use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /**
    * Dummy passing test
    *
    * @test
    */
    public function dummyPassingTest(): void
    {
        $this->assertTrue(true);
    }
}
