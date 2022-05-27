<?php

declare(strict_types=1);

namespace ItaliaMultimedia\PostalCodeValidator;

/**
* Postal code validator.
*
* General
*/
class PostalCodeValidator
{
    // phpcs:ignore SlevomatCodingStandard.Functions.FunctionLength.FunctionLength,SlevomatCodingStandard.Files.FunctionLength.FunctionLength
    public function validate(string $countryCode, string $postalCode): bool
    {
        switch ($countryCode) {
            case 'AT':
            case 'AU':
            case 'BG':
            case 'BE':
            case 'CH':
            case 'CY':
            case 'DK':
            // pattern: 'LV-\\d{4}'
            case 'LV':
            case 'LU':
            case 'NZ':
            case 'SI':
                return $this->validateRegex($postalCode, '\\d{4}');
            case 'CA':
                return $this->validateRegex(
                    $postalCode,
                    '[ABCEGHJKLMNPRSTVXY]\\d[ABCEGHJ-NPRSTV-Z] ?\\d[ABCEGHJ-NPRSTV-Z]\\d',
                );
            case 'CN':
            case 'RO':
            case 'RU':
                return $this->validateRegex($postalCode, '\\d{6}');
            case 'CZ':
                return $this->validateRegex($postalCode, '\\d{3} ?\\d{2}');
            case 'DE':
            case 'EE':
            case 'ES':
            case 'IT':
            case 'FI':
            case 'KR':
            case 'LT':
            case 'MX':
            case 'UA':
                return $this->validateRegex($postalCode, '\\d{5}');
            case 'FR':
                return $this->validateRegex($postalCode, '\\d{2} ?\\d{3}');
            case 'GB':
                return $this->validateRegex(
                    $postalCode,
                    'GIR ?0AA|(?:(?:AB|AL|B|BA|BB|BD|BH|BL|BN|BR|BS|BT|BX|CA|CB|CF|CH|CM|CO|CR|CT|CV|CW|DA|DD|DE|DG|'
                    . 'DH|DL|DN|DT|DY|E|EC|EH|EN|EX|FK|FY|G|GL|GY|GU|HA|HD|HG|HP|HR|HS|HU|HX|IG|IM|IP|IV|JE|KA|KT|KW'
                    . '|KY|L|LA|LD|LE|LL|LN|LS|LU|M|ME|MK|ML|N|NE|NG|NN|NP|NR|NW|OL|OX|PA|PE|PH|PL|PO|PR|RG|RH|RM|S'
                    . '|SA|SE|SG|SK|SL|SM|SN|SO|SP|SR|SS|ST|SW|SY|TA|TD|TF|TN|TQ|TR|TS|TW|UB|W|WA|WC|WD|WF|WN|WR|WS|'
                    . 'WV|YO|ZE)(?:\\d[\\dA-Z]? ?\\d[ABD-HJLN-UW-Z]{2}))|BFPO ?\\d{1,4}',
                );
            case 'GR':
                return $this->validateRegex($postalCode, '\\d{3} ?\\d{2}');
            case 'LI':
                return $this->validateRegex($postalCode, '948[5-9]|949[0-7]');
            case 'NL':
                return $this->validateRegex($postalCode, '\\d{4} ?[A-Z]{2}');
            case 'PL':
                return $this->validateRegex($postalCode, '\\d{2}-\\d{3}');
            case 'PT':
                return $this->validateRegex($postalCode, '\\d{4}-\\d{3}');
            case 'SE':
                return $this->validateRegex($postalCode, '\\d{3} ?\\d{2}');
            case 'SK':
                return $this->validateRegex($postalCode, '\\d{3} ?\\d{2}');
            case 'SM':
                return $this->validateRegex($postalCode, '4789\\d');
            case 'US':
                return $this->validateRegex($postalCode, '(\\d{5})(?:[ \\-](\\d{4}))?');
            default:
                throw new PostalCodeValidatorException(
                    \sprintf('Country not implemented: "%s".', $countryCode),
                );
        }
    }

    protected function validateRegex(string $postalCode, string $pattern): bool
    {
        return \preg_match(\sprintf('/^%s$/', $pattern), $postalCode) === 1;
    }
}
