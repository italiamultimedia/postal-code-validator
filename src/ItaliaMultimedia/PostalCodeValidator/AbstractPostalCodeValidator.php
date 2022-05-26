<?php

declare(strict_types=1);

namespace ItaliaMultimedia\PostalCodeValidator;

abstract class AbstractPostalCodeValidator
{
    protected function validateRegex(string $postalCode, string $pattern): bool
    {
        return \preg_match(\sprintf('/^%s$/', $pattern), $postalCode) === 1;
    }
}
