<?php

declare(strict_types=1);

namespace ItaliaMultimedia\PostalCodeValidator;

final class PostalCodeValidatorItaly extends AbstractPostalCodeValidator implements PostalCodeValidatorInterface
{
    public const REGEX = '\\d{5}';
    public const FORMAT = '99999';

    public function validate(string $postalCode): bool
    {
        return $this->validateRegex($postalCode, self::REGEX);
    }
}
