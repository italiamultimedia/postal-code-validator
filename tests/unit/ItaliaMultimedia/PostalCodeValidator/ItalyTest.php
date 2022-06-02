<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator;
use PHPUnit\Framework\TestCase;

/**
* @covers \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator
*/
final class ItalyTest extends TestCase
{
    protected const COUNTRY_CODE = 'IT';

    public function testAssertInvalidCodeFailSixDigits(): void
    {
        $validator = new PostalCodeValidator();
        self::assertFalse($validator->validate(self::COUNTRY_CODE, '123456'));
    }

    public function testAssertValidCodePassMilano(): void
    {
        $validator = new PostalCodeValidator();
        self::assertTrue($validator->validate(self::COUNTRY_CODE, '20129'));
    }

    public function testAssertValidCodePassRome(): void
    {
        $validator = new PostalCodeValidator();
        self::assertTrue($validator->validate(self::COUNTRY_CODE, '00128'));
    }
}
