<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator;
use PHPUnit\Framework\TestCase;

/**
* @covers \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator
*/
final class MaltaTest extends TestCase
{
    private const COUNTRY_CODE = 'MT';

    public function testAssertInvalidCodeFails(): void
    {
        $validator = new PostalCodeValidator();
        self::assertFalse($validator->isValid(self::COUNTRY_CODE, 'BKR-9037'));
    }

    public function testAssertCorrectCodeWithoutSpaceFails(): void
    {
        $validator = new PostalCodeValidator();
        self::assertFalse($validator->isValid(self::COUNTRY_CODE, 'BKR9037'));
    }

    public function testAssertValidCodePass(): void
    {
        $validator = new PostalCodeValidator();
        self::assertTrue($validator->isValid(self::COUNTRY_CODE, 'BKR 9037'));
    }
}
