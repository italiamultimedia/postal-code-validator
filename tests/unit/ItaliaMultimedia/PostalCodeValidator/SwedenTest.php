<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator;
use PHPUnit\Framework\TestCase;

/**
* @covers \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator
*/
final class SwedenTest extends TestCase
{
    protected const COUNTRY_CODE = 'SE';

    public function testInvalidCodeFailSpaceMandatory(): void
    {
        $validator = new PostalCodeValidator();
        // Stockholm 100 05
        self::assertFalse($validator->isValid(self::COUNTRY_CODE, '10005'));
    }

    public function testAssertValidCodePassBratislava(): void
    {
        $validator = new PostalCodeValidator();
        // Stockholm 100 05
        self::assertTrue($validator->isValid(self::COUNTRY_CODE, '100 05'));
    }
}
