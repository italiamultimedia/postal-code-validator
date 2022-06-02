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

    public function testAssertInvalidCodeFails(): void
    {
        $validator = new PostalCodeValidator();
        self::assertFalse($validator->validate(self::COUNTRY_CODE, '3059 12'));
    }

    public function testAssertCorrectCodeWithoutSpaceFails(): void
    {
        $validator = new PostalCodeValidator();
        self::assertFalse($validator->validate(self::COUNTRY_CODE, '3059XD'));
    }

    public function testAssertValidCodePass(): void
    {
        $validator = new PostalCodeValidator();
        self::assertTrue($validator->validate(self::COUNTRY_CODE, '3059 XD'));
    }
}
