<?php

declare(strict_types=1);

namespace Tests\PostalCodeValidator;

use ItaliaMultimedia\PostalCodeValidator\PostalCodeFormatHelper;
use ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorException;
use PHPUnit\Framework\TestCase;

/**
* @covers \ItaliaMultimedia\PostalCodeValidator\PostalCodeFormatHelper
* @uses ::__
*/
final class PostalCodeFormatHelperTest extends TestCase
{
    public function testAssertInvalidFormatCallThrowsException(): void
    {
        $helper = new PostalCodeFormatHelper();
        $this->expectException(PostalCodeValidatorException::class);
        $helper->getFormat('ABC');
    }

    public function testAssertInvalidNumbersSentenceCallThrowsException(): void
    {
        $helper = new PostalCodeFormatHelper();
        $this->expectException(PostalCodeValidatorException::class);
        $helper->getNumbersSentence(99);
    }

    public function testAssertFormatsArray(): void
    {
        $helper = new PostalCodeFormatHelper();
        self::assertIsArray($helper->getFormats());
    }

    public function testAssertFormatsArrayHasKeyAT(): void
    {
        $helper = new PostalCodeFormatHelper();
        self::assertArrayHasKey('AT', $helper->getFormats());
    }

    public function testAssertFourNumbersSentence(): void
    {
        $helper = new PostalCodeFormatHelper();
        self::assertSame('4 numbers', $helper->getFormat('AT'));
    }
}
