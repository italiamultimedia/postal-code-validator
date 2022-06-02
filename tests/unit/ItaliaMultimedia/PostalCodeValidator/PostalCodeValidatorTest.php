<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator;
use ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorException;
use PHPUnit\Framework\TestCase;

/**
* @covers \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator
*/
final class PostalCodeValidatorTest extends TestCase
{
    /**
    * @test
    */
    public function assertInvalidValidateCallThrowsException(): void
    {
        $validator = new PostalCodeValidator();
        $this->expectException(PostalCodeValidatorException::class);
        $validator->validate('ABC', 'DEFGH');
    }

    /**
    * @test
    */
    public function assertPatternsArray(): void
    {
        $validator = new PostalCodeValidator();
        self::assertIsArray($validator->getPatterns());
    }

    /**
    * @test
    */
    public function assertPatternsArrayHasKeyAT(): void
    {
        $validator = new PostalCodeValidator();
        self::assertArrayHasKey('AT', $validator->getPatterns());
    }
}
