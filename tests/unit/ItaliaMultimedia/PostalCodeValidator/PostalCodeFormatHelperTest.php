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
    /**
    * @test
    */
    public function assertInvalidFormatCallThrowsException(): void
    {
        $helper = new PostalCodeFormatHelper();
        $this->expectException(PostalCodeValidatorException::class);
        $helper->getFormat('ABC');
    }

    /**
    * @test
    */
    public function assertInvalidNumbersSentenceCallThrowsException(): void
    {
        $helper = new PostalCodeFormatHelper();
        $this->expectException(PostalCodeValidatorException::class);
        $helper->getNumbersSentence(99);
    }

    /**
    * @test
    */
    public function assertFormatsArray(): void
    {
        $helper = new PostalCodeFormatHelper();
        $this->assertIsArray($helper->getFormats());
    }

    /**
    * @test
    */
    public function assertFormatsArrayHasKeyAT(): void
    {
        $helper = new PostalCodeFormatHelper();
        $this->assertArrayHasKey('AT', $helper->getFormats());
    }

    /**
    * @test
    */
    public function assertFourNumbersSentence(): void
    {
        $helper = new PostalCodeFormatHelper();
        $this->assertSame('4 numbers', $helper->getFormat('AT'));
    }
}
