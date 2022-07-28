<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator;
use PHPUnit\Framework\TestCase;

/**
* @covers \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator
*/
final class FranceTest extends TestCase
{
    protected const COUNTRY_CODE = 'FR';

    public function testInvalidCodeFailSpaceForbidden(): void
    {
        $validator = new PostalCodeValidator();
        // Grenoble 38017
        self::assertFalse($validator->isValid(self::COUNTRY_CODE, '38 017'));
    }

    public function testAssertValidCodePassGrenoble(): void
    {
        $validator = new PostalCodeValidator();
        // Grenoble 38017
        self::assertTrue($validator->isValid(self::COUNTRY_CODE, '38017'));
    }
}
