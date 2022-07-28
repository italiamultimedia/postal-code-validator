<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator;
use PHPUnit\Framework\TestCase;

/**
* @covers \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator
*/
final class GreeceTest extends TestCase
{
    protected const COUNTRY_CODE = 'GR';

    public function testInvalidCodeFailSpaceMandatory(): void
    {
        $validator = new PostalCodeValidator();
        // Athens 104 31
        self::assertFalse($validator->isValid(self::COUNTRY_CODE, '10431'));
    }

    public function testAssertValidCodePassBratislava(): void
    {
        $validator = new PostalCodeValidator();
        // Athens 104 31
        self::assertTrue($validator->isValid(self::COUNTRY_CODE, '104 31'));
    }
}
