<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use PHPUnit\Framework\TestCase;

final class ItalyTest extends TestCase
{
    /**
    * Invalid code
    *
    * @test
    */
    public function assertInvalidCodeFailSixDigits(): void
    {
        $validator = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorItaly();
        $this->assertFalse($validator->validate('123456'));
    }

    /**
    * Valid code - Milano
    *
    * @test
    */
    public function assertValidCodePassMilano(): void
    {
        $validator = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorItaly();
        $this->assertTrue($validator->validate('20129'));
    }

    /**
    * Valid code - Rome
    *
    * @test
    */
    public function assertValidCodePassRome(): void
    {
        $validator = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorItaly();
        $this->assertTrue($validator->validate('00128'));
    }
}
