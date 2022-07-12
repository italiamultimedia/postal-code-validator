<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator;
use PHPUnit\Framework\TestCase;

/**
* @covers \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator
*/
final class CzechRepublicTest extends TestCase
{
    protected const COUNTRY_CODE = 'CZ';

    public function testInvalidCodeFailSpaceMandatory(): void
    {
        $validator = new PostalCodeValidator();
        // Praha 190 00
        self::assertFalse($validator->validate(self::COUNTRY_CODE, '19000'));
    }

    public function testAssertValidCodePassBratislava(): void
    {
        $validator = new PostalCodeValidator();
        // Praha 190 00
        self::assertTrue($validator->validate(self::COUNTRY_CODE, '190 00'));
    }
}
