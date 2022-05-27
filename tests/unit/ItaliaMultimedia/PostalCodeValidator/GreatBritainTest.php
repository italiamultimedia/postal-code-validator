<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use PHPUnit\Framework\TestCase;

/**
* @covers \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorGreatBritain
* @uses \ItaliaMultimedia\PostalCodeValidator\AbstractPostalCodeValidator
*/
final class GreatBritainTest extends TestCase
{
    /**
    * Format test
    *
    * @test
    */
    public function assertFormatMatches(): void
    {
        $validator = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorGreatBritain();
        $this->assertEquals('AA99 9AA', $validator->getFormat());
    }

    /**
    * Invalid code
    *
    * @test
    */
    public function assertInvalidCodeFailSixDigits(): void
    {
        $validator = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorGreatBritain();
        $this->assertFalse($validator->validate('123456'));
    }

    /**
    * Valid code - Loughborough
    *
    * @test
    */
    public function assertValidCodePassLoughborough(): void
    {
        $validator = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorGreatBritain();
        $this->assertTrue($validator->validate('LE11 1HL'));
    }

    /**
    * Valid code - London
    *
    * @test
    */
    public function assertValidCodePassLondon(): void
    {
        $validator = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorGreatBritain();
        $this->assertTrue($validator->validate('WC2N 5DU'));
    }

    /**
    * Valid code - Manchester
    *
    * @test
    */
    public function assertValidCodePassManchester(): void
    {
        $validator = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorGreatBritain();
        $this->assertTrue($validator->validate('M2 4WU'));
    }
}
