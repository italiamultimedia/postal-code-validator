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
    public function testAssertInvalidValidationCallThrowsException(): void
    {
        $validator = new PostalCodeValidator();
        $this->expectException(PostalCodeValidatorException::class);
        $validator->isValid('ABC', 'DEFGH');
    }

    public function testAssertPatternsArray(): void
    {
        $validator = new PostalCodeValidator();
        self::assertIsArray($validator->getPatterns());
    }

    public function testAssertPatternsArrayHasKeyAT(): void
    {
        $validator = new PostalCodeValidator();
        self::assertArrayHasKey('AT', $validator->getPatterns());
    }
}
