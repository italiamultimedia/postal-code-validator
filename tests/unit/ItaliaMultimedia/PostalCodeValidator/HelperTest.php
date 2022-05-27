<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use PHPUnit\Framework\TestCase;

/**
* @covers \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorHelper
*/
final class HelperTest extends TestCase
{
    /**
    * Validator implementation test
    *
    * @test
    */
    public function assertValidatorGreatBritain(): void
    {
        $validatorHelper = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorHelper();
        $this->assertInstanceOf(
            \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorGreatBritain::class,
            $validatorHelper->getValidator('GB'),
        );
    }

    /**
    * Validator implementation test
    *
    * @test
    */
    public function assertValidatorItaly(): void
    {
        $validatorHelper = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorHelper();
        $this->assertInstanceOf(
            \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorItaly::class,
            $validatorHelper->getValidator('IT'),
        );
    }
}
