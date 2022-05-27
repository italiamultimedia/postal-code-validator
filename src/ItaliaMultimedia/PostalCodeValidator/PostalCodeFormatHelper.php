<?php

declare(strict_types=1);

namespace ItaliaMultimedia\PostalCodeValidator;

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
                return \sprintf('%s numbers', '4');
            case 'CA':
                return 'ANA b NAN';
            case 'CN':
            case 'RO':
            case 'RU':
                return \sprintf('%s numbers', '6');
            case 'CZ':
                return '3N b 2N';
            case 'GB':
                return 'AA99 9AA';
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
                return \sprintf('%s numbers', '5');
            case 'NL':
                return '4N b 2A';
            case 'PL':
                return '2n – 3n';
            case 'PT':
                return '4n – 3n';
            case 'SK':
                return '3N b 2N';
            default:
                throw new \InvalidArgumentException(
                    \sprintf('Country not implemented: "%s".', $countryCode),
                );
        }
    }
}
