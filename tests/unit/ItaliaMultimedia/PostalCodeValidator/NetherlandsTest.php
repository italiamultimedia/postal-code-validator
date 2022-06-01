<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator;
use PHPUnit\Framework\TestCase;

/**
* @covers \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator
*/
final class NetherlandsTest extends TestCase
{
    protected const COUNTRY_CODE = 'NL';

    /**
    * @test
    */
    public function assertInvalidCodeFails(): void
    {
        $validator = new PostalCodeValidator();
        $this->assertFalse($validator->validate(self::COUNTRY_CODE, '3059 12'));
    }

    /**
    * @test
    */
    public function assertCorrectCodeWithoutSpaceFails(): void
    {
        $validator = new PostalCodeValidator();
        $this->assertFalse($validator->validate(self::COUNTRY_CODE, '3059XD'));
    }

    /**
    * @test
    */
    public function assertValidCodePass(): void
    {
        $validator = new PostalCodeValidator();
        $this->assertTrue($validator->validate(self::COUNTRY_CODE, '3059 XD'));
    }
}
