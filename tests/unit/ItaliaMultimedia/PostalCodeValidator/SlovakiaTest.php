<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator;
use PHPUnit\Framework\TestCase;

/**
* @covers \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator
*/
final class SlovakiaTest extends TestCase
{
    protected const COUNTRY_CODE = 'SK';

    public function testInvalidCodeFailSpaceMandatory(): void
    {
        $validator = new PostalCodeValidator();
        // Bratislava 811 01
        self::assertFalse($validator->validate(self::COUNTRY_CODE, '81101'));
    }

    public function testAssertValidCodePassBratislava(): void
    {
        $validator = new PostalCodeValidator();
        // Bratislava 811 01
        self::assertTrue($validator->validate(self::COUNTRY_CODE, '811 01'));
    }
}
