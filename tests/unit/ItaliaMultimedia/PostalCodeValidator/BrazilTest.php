<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator;
use PHPUnit\Framework\TestCase;

/**
* @covers \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator
*/
final class BrazilTest extends TestCase
{
    protected const COUNTRY_CODE = 'BR';

    public function testInvalidCodeFailLineMissing(): void
    {
        $validator = new PostalCodeValidator();
        // Sao Joao da Boa Vista 13874-149
        self::assertFalse($validator->validate(self::COUNTRY_CODE, '13874149'));
    }

    public function testInvalidCodeFailUsingSpace(): void
    {
        $validator = new PostalCodeValidator();
        // Sao Joao da Boa Vista 13874-149
        self::assertFalse($validator->validate(self::COUNTRY_CODE, '13874 149'));
    }

    public function testInvalidCodeFailWrongLength(): void
    {
        $validator = new PostalCodeValidator();
        // Sao Joao da Boa Vista 13874-149
        self::assertFalse($validator->validate(self::COUNTRY_CODE, '13874-14'));
    }

    public function testAssertValidCodePassSaoJoaoDaBoaVista(): void
    {
        $validator = new PostalCodeValidator();
        // Sao Joao da Boa Vista 13874-149
        self::assertTrue($validator->validate(self::COUNTRY_CODE, '13874-149'));
    }
}
