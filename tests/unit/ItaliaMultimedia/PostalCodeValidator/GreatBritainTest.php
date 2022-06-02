<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator;
use PHPUnit\Framework\TestCase;

/**
* @covers \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator
*/
final class GreatBritainTest extends TestCase
{
    protected const COUNTRY_CODE = 'GB';

    public function testAssertInvalidCodeFailSixDigits(): void
    {
        $validator = new PostalCodeValidator();
        self::assertFalse($validator->validate(self::COUNTRY_CODE, '123456'));
    }

    public function testAssertValidCodePassLoughborough(): void
    {
        $validator = new PostalCodeValidator();
        self::assertTrue($validator->validate(self::COUNTRY_CODE, 'LE11 1HL'));
    }

    public function testAssertValidCodePassLondon(): void
    {
        $validator = new PostalCodeValidator();
        self::assertTrue($validator->validate(self::COUNTRY_CODE, 'WC2N 5DU'));
    }

    public function testAssertValidCodePassManchester(): void
    {
        $validator = new PostalCodeValidator();
        self::assertTrue($validator->validate(self::COUNTRY_CODE, 'M2 4WU'));
    }
}
