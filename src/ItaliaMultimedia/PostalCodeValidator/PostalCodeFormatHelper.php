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
        $formats = $this->getFormats();
        if (!\array_key_exists($countryCode, $formats)) {
            throw new PostalCodeValidatorException(
                \sprintf('Country not implemented: "%s".', $countryCode),
            );
        }
        return $formats[$countryCode];
    }

    /**
    * @return array<string,string>
    */
    // phpcs:ignore SlevomatCodingStandard.Functions.FunctionLength.FunctionLength, SlevomatCodingStandard.Files.FunctionLength.FunctionLength
    public function getFormats(): array
    {
        $sentenceFourNumbers = $this->getNumbersSentence(4);
        $sentenceFiveNumbers = $this->getNumbersSentence(5);
        $sentenceSixNumbers = $this->getNumbersSentence(6);
        return [
            'AT' => $sentenceFourNumbers,
            'AU' => $sentenceFourNumbers,
            'BE' => $sentenceFourNumbers,
            'BG' => $sentenceFourNumbers,
            'CH' => $sentenceFourNumbers,
            'CY' => $sentenceFourNumbers,
            'DK' => $sentenceFourNumbers,
            'LV' => $sentenceFourNumbers,
            'LI' => $sentenceFourNumbers,
            'LU' => $sentenceFourNumbers,
            'NZ' => $sentenceFourNumbers,
            'SI' => $sentenceFourNumbers,
            'CA' => \__('ANA b NAN  (Letter, Number, Letter, a space, Number, Letter, Number: for example M5A 1A2)'),
            'CN' => $sentenceSixNumbers,
            'RO' => $sentenceSixNumbers,
            'RU' => $sentenceSixNumbers,
            'CZ' => \__('3N b 2N (3 numbers, a space, 2 numbers, example: 277 07)'),
            'GB' => \__('last 4 digit must be a space, a numer, 2 letters, example: LS26 8AL'),
            'DE' => $sentenceFiveNumbers,
            'GR' => $sentenceFiveNumbers,
            'IT' => $sentenceFiveNumbers,
            'EE' => $sentenceFiveNumbers,
            'ES' => $sentenceFiveNumbers,
            'FI' => $sentenceFiveNumbers,
            'FR' => $sentenceFiveNumbers,
            'KR' => $sentenceFiveNumbers,
            'LT' => $sentenceFiveNumbers,
            'MX' => $sentenceFiveNumbers,
            'SE' => $sentenceFiveNumbers,
            'SM' => $sentenceFiveNumbers,
            'UA' => $sentenceFiveNumbers,
            'US' => $sentenceFiveNumbers,
            'NL' => \__('4N b 2A (4 numbers, a space, 2 letters, example: 1014 DA)'),
            'PL' => \__('2n – 3n (2 numbers, -, 3 numbers, example: 20-002)'),
            'PT' => \__('4n – 3n (4 numbers, -, 3 numbers, example: 3000-387)'),
            'SK' => \__('3N b 2N (3 numbers, a space, 2 numbers, example: 958 01)'),
        ];
    }

    public function getNumbersSentence(int $numbers): string
    {
        switch ($numbers) {
            case 4:
                return \__('4 numbers');
            case 5:
                return \__('5 numbers');
            case 6:
                return \__('6 numbers');
            default:
                throw new PostalCodeValidatorException(
                    \sprintf('No sentence for "%d" numbers.', $numbers),
                );
        }
    }
}
