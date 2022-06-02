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

    /**
    * Invalid code
    *
    * @test
    */
    public function assertInvalidCodeFailSixDigits(): void
    {
        $validator = new PostalCodeValidator();
        self::assertFalse($validator->validate(self::COUNTRY_CODE, '123456'));
    }

    /**
    * Valid code - Loughborough
    *
    * @test
    */
    public function assertValidCodePassLoughborough(): void
    {
        $validator = new PostalCodeValidator();
        self::assertTrue($validator->validate(self::COUNTRY_CODE, 'LE11 1HL'));
    }

    /**
    * Valid code - London
    *
    * @test
    */
    public function assertValidCodePassLondon(): void
    {
        $validator = new PostalCodeValidator();
        self::assertTrue($validator->validate(self::COUNTRY_CODE, 'WC2N 5DU'));
    }

    /**
    * Valid code - Manchester
    *
    * @test
    */
    public function assertValidCodePassManchester(): void
    {
        $validator = new PostalCodeValidator();
        self::assertTrue($validator->validate(self::COUNTRY_CODE, 'M2 4WU'));
    }
}
