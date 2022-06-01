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
        $validator = new PostalCodeValidator();
        $this->assertFalse($validator->validate(self::COUNTRY_CODE, '123456'));
    }

    /**
    * Valid code - Milano
    *
    * @test
    */
    public function assertValidCodePassMilano(): void
    {
        $validator = new PostalCodeValidator();
        $this->assertTrue($validator->validate(self::COUNTRY_CODE, '20129'));
    }

    /**
    * Valid code - Rome
    *
    * @test
    */
    public function assertValidCodePassRome(): void
    {
        $validator = new PostalCodeValidator();
        $this->assertTrue($validator->validate(self::COUNTRY_CODE, '00128'));
    }
}
