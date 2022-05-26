<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use PHPUnit\Framework\TestCase;

final class HelperItalyTest extends TestCase
{
    /**
    * Format test
    *
    * @test
    */
    public function assertFormatMatches(): void
    {
        $validatorHelper = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorHelper();
        $this->assertEquals('99999', $validatorHelper->getValidator('IT')->getFormat());
    }

    /**
    * Invalid code
    *
    * @test
    */
    public function assertInvalidCodeFailSixDigits(): void
    {
        $validatorHelper = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorHelper();
        $this->assertFalse($validatorHelper->validate('IT', '123456'));
    }

    /**
    * Valid code - Milano
    *
    * @test
    */
    public function assertValidCodePassMilano(): void
    {
        $validatorHelper = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorHelper();
        $this->assertTrue($validatorHelper->validate('IT', '20129'));
    }

    /**
    * Valid code - Rome
    *
    * @test
    */
    public function assertValidCodePassRome(): void
    {
        $validatorHelper = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorHelper();
        $this->assertTrue($validatorHelper->validate('IT', '00128'));
    }
}
