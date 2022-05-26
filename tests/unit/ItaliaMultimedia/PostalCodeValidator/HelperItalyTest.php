<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use PHPUnit\Framework\TestCase;

final class HelperItalyTest extends TestCase
{
    protected const COUNTRY_CODE = 'IT';

    /**
    * Format test
    *
    * @test
    */
    public function assertFormatMatches(): void
    {
        $validatorHelper = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorHelper();
        $this->assertEquals('99999', $validatorHelper->getValidator(self::COUNTRY_CODE)->getFormat());
    }

    /**
    * Invalid code
    *
    * @test
    */
    public function assertInvalidCodeFailSixDigits(): void
    {
        $validatorHelper = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorHelper();
        $this->assertFalse($validatorHelper->validate(self::COUNTRY_CODE, '123456'));
    }

    /**
    * Valid code - Milano
    *
    * @test
    */
    public function assertValidCodePassMilano(): void
    {
        $validatorHelper = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorHelper();
        $this->assertTrue($validatorHelper->validate(self::COUNTRY_CODE, '20129'));
    }

    /**
    * Valid code - Rome
    *
    * @test
    */
    public function assertValidCodePassRome(): void
    {
        $validatorHelper = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorHelper();
        $this->assertTrue($validatorHelper->validate(self::COUNTRY_CODE, '00128'));
    }
}
