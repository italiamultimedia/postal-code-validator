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
    public function getFormat(string $countryCode): string
    {
        $formats = [
            'AT' => \__('4 numbers'),
            'AU' => \__('4 numbers'),
            'BE' => \__('4 numbers'),
            'BG' => \__('4 numbers'),
            'CH' => \__('4 numbers'),
            'CY' => \__('4 numbers'),
            'DK' => \__('4 numbers'),
            'LV' => \__('4 numbers'),
            'LI' => \__('4 numbers'),
            'LU' => \__('4 numbers'),
            'NZ' => \__('4 numbers'),
            'SI' => \__('4 numbers'),
            'CA' => \__('ANA b NAN  (Letter, Number, Letter, a space, Number, Letter, Number: for example M5A 1A2)'),
            'CN' => \__('6 numbers'),
            'RO' => \__('6 numbers'),
            'RU' => \__('6 numbers'),
            'CZ' => \__('3N b 2N (3 numbers, a space, 2 numbers, example: 277 07)'),
            'GB' => \__('last 4 digit must be a space, a numer, 2 letters, example: LS26 8AL'),
            'DE' => \__('5 numbers'),
            'GR' => \__('5 numbers'),
            'IT' => \__('5 numbers'),
            'EE' => \__('5 numbers'),
            'ES' => \__('5 numbers'),
            'FI' => \__('5 numbers'),
            'FR' => \__('5 numbers'),
            'KR' => \__('5 numbers'),
            'LT' => \__('5 numbers'),
            'MX' => \__('5 numbers'),
            'SE' => \__('5 numbers'),
            'SM' => \__('5 numbers'),
            'UA' => \__('5 numbers'),
            'US' => \__('5 numbers'),
            'NL' => \__('4N b 2A (4 numbers, a space, 2 letters, example: 1014 DA)'),
            'PL' => \__('2n – 3n (2 numbers, -, 3 numbers, example: 20-002)'),
            'PT' => \__('4n – 3n (4 numbers, -, 3 numbers, example: 3000-387)'),
            'SK' => \__('3N b 2N (3 numbers, a space, 2 numbers, example: 958 01)'),
        ];
        if (!\array_key_exists($countryCode, $formats)) {
            throw new PostalCodeValidatorException(
                \sprintf('Country not implemented: "%s".', $countryCode),
            );
        }
        return $formats[$countryCode];
    }
}
