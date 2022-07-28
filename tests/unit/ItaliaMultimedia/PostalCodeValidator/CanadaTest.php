<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator;
use PHPUnit\Framework\TestCase;

/**
* @covers \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator
*/
final class CanadaTest extends TestCase
{
    protected const COUNTRY_CODE = 'CA';

    public function testAssertInvalidCodeFailSixDigits(): void
    {
        $validator = new PostalCodeValidator();
        self::assertFalse($validator->isValid(self::COUNTRY_CODE, '123456'));
    }

    public function testAssertValidCodePassNiagaraFalls(): void
    {
        $validator = new PostalCodeValidator();
        self::assertTrue($validator->isValid(self::COUNTRY_CODE, 'L2J 4L6'));
    }

    public function testAssertValidCodeFailNiagaraFallsSpaceMissing(): void
    {
        $validator = new PostalCodeValidator();
        self::assertFalse($validator->isValid(self::COUNTRY_CODE, 'L2J4L6'));
    }
}
