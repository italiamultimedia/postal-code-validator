<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator;
use PHPUnit\Framework\TestCase;

/**
* @covers \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator
*/
final class ItalyTest extends TestCase
{
    protected const COUNTRY_CODE = 'IT';

    /**
    * Invalid code
    *
    * @test
    */
    public function assertInvalidCodeFailSixDigits(): void
    {
        $validatorHelper = new PostalCodeValidator();
        $this->assertFalse($validatorHelper->validate(self::COUNTRY_CODE, '123456'));
    }

    /**
    * Valid code - Milano
    *
    * @test
    */
    public function assertValidCodePassMilano(): void
    {
        $validatorHelper = new PostalCodeValidator();
        $this->assertTrue($validatorHelper->validate(self::COUNTRY_CODE, '20129'));
    }

    /**
    * Valid code - Rome
    *
    * @test
    */
    public function assertValidCodePassRome(): void
    {
        $validatorHelper = new PostalCodeValidator();
        $this->assertTrue($validatorHelper->validate(self::COUNTRY_CODE, '00128'));
    }
}
