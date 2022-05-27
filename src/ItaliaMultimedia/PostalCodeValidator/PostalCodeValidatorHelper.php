<?php

declare(strict_types=1);

namespace ItaliaMultimedia\PostalCodeValidator;

/**
* Postal code validator.
*
* General
*/
class PostalCodeValidatorHelper
{
    public function getValidator(string $countryCode): PostalCodeValidatorInterface
    {
        switch ($countryCode) {
            case 'GB':
                return new PostalCodeValidatorGreatBritain();
            case 'IT':
                return new PostalCodeValidatorItaly();
            default:
                throw new PostalCodeValidatorException(
                    \sprintf('Validation not implemented for countryCode "%s".', $countryCode),
                );
        }
    }

    /**
    * Validate postal code.
    *
    * @throws \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorException if country not implemented
    */
    public function validate(string $countryCode, string $postalCode): bool
    {
        // \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorInterface
        $validator = $this->getValidator($countryCode);

        return $validator->validate($postalCode);
    }
}
