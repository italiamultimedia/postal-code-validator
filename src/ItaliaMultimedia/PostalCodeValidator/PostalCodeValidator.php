<?php

declare(strict_types=1);

namespace ItaliaMultimedia\PostalCodeValidator;

final class PostalCodeValidator
{
    public function validate(string $countryCode, string $postalCode): bool
    {
        // \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorInterface
        $validator = $this->getValidator($countryCode);

        return $validator->validate($postalCode);
    }

    public function getValidator(string $countryCode): PostalCodeValidatorInterface
    {
        switch ($countryCode) {
            case 'IT':
                return new PostalCodeValidatorItaly();
            default:
                throw new PostalCodeValidatorException(
                    \sprintf('Validation not implemented for countryCode "%s".', $countryCode),
                );
        }
    }
}
