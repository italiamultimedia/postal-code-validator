<?php

declare(strict_types=1);

namespace ItaliaMultimedia\PostalCodeValidator;

/**
* Postal code format information.
*
* In order to translate, add to Poedit search path: `vendor/italiamultimedia/postal-code-validator/src`
*/
class PostalCodeFormatHelper
{
    // phpcs:ignore SlevomatCodingStandard.Functions.FunctionLength.FunctionLength,SlevomatCodingStandard.Files.FunctionLength.FunctionLength
    public function getFormat(string $countryCode): string
    {
        switch ($countryCode) {
            case 'AT':
            case 'AU':
            case 'BE':
            case 'BG':
            case 'CH':
            case 'CY':
            case 'DK':
            case 'LV':
            case 'LI':
            case 'LU':
            case 'NZ':
            case 'SI':
                return \__('4 numbers');
            case 'CA':
                return \__('ANA b NAN  (Letter, Number, Letter, a space, Number, Letter, Number: for example M5A 1A2)');
            case 'CN':
            case 'RO':
            case 'RU':
                return \__('6 numbers');
            case 'CZ':
                return \__('3N b 2N (3 numbers, a space, 2 numbers, example: 277 07)');
            case 'GB':
                return \__('last 4 digit must be a space, a numer, 2 letters, example: LS26 8AL');
            case 'DE':
            case 'GR':
            case 'IT':
            case 'EE':
            case 'ES':
            case 'FI':
            case 'FR':
            case 'KR':
            case 'LT':
            case 'MX':
            case 'SE':
            case 'SM':
            case 'UA':
            case 'US':
                return \__('5 numbers');
            case 'NL':
                return \__('4N b 2A (4 numbers, a space, 2 letters, example: 1014 DA)');
            case 'PL':
                return \__('2n – 3n (2 numbers, -, 3 numbers, example: 20-002)');
            case 'PT':
                return \__('4n – 3n (4 numbers, -, 3 numbers, example: 3000-387)');
            case 'SK':
                return \__('3N b 2N (3 numbers, a space, 2 numbers, example: 958 01)');
            default:
                throw new PostalCodeValidatorException(
                    \sprintf('Country not implemented: "%s".', $countryCode),
                );
        }
    }
}
