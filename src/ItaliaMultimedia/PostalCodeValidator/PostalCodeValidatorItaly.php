<?php

declare(strict_types=1);

namespace ItaliaMultimedia\PostalCodeValidator;

/**
* Postal code validator.
*
* Italy
*/
final class PostalCodeValidatorItaly extends AbstractPostalCodeValidator implements PostalCodeValidatorInterface
{
    public function getFormat(): string
    {
        return '99999';
    }

    public function validate(string $postalCode): bool
    {
        return $this->validateRegex($postalCode, '\\d{5}');
    }
}
